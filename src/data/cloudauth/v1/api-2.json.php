<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'cloudauth',
        'protocol' => 'json',
//        'serviceFullName' => 'cloudauth',
//        'serviceId' => 'cloudauth',
    ],
    'operations' => [
        'PersonalAuth' => [
            'name' => 'PersonalAuth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/personal',
            ],
            'input' => [ 'shape' => 'PersonalAuthRequestShape', ],
            'output' => [ 'shape' => 'PersonalAuthResponseShape', ],
        ],
        'CompanyTransfer' => [
            'name' => 'CompanyTransfer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:transfer',
            ],
            'input' => [ 'shape' => 'CompanyTransferRequestShape', ],
            'output' => [ 'shape' => 'CompanyTransferResponseShape', ],
        ],
        'CheckCompanyTransfer' => [
            'name' => 'CheckCompanyTransfer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:check',
            ],
            'input' => [ 'shape' => 'CheckCompanyTransferRequestShape', ],
            'output' => [ 'shape' => 'CheckCompanyTransferResponseShape', ],
        ],
        'CheckCompanyInfo' => [
            'name' => 'CheckCompanyInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:info',
            ],
            'input' => [ 'shape' => 'CheckCompanyInfoRequestShape', ],
            'output' => [ 'shape' => 'CheckCompanyInfoResponseShape', ],
        ],
        'CheckLegalPerson' => [
            'name' => 'CheckLegalPerson',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:legalPerson',
            ],
            'input' => [ 'shape' => 'CheckLegalPersonRequestShape', ],
            'output' => [ 'shape' => 'CheckLegalPersonResponseShape', ],
        ],
        'QueryCityList' => [
            'name' => 'QueryCityList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/query:cityList',
            ],
            'input' => [ 'shape' => 'QueryCityListRequestShape', ],
            'output' => [ 'shape' => 'QueryCityListResponseShape', ],
        ],
        'CompanyTransferSimple' => [
            'name' => 'CompanyTransferSimple',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:transferSimple',
            ],
            'input' => [ 'shape' => 'CompanyTransferSimpleRequestShape', ],
            'output' => [ 'shape' => 'CompanyTransferSimpleResponseShape', ],
        ],
        'QueryProvinceList' => [
            'name' => 'QueryProvinceList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/query:provinceList',
            ],
            'input' => [ 'shape' => 'QueryProvinceListRequestShape', ],
            'output' => [ 'shape' => 'QueryProvinceListResponseShape', ],
        ],
        'QueryBankList' => [
            'name' => 'QueryBankList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/query:bankList',
            ],
            'input' => [ 'shape' => 'QueryBankListRequestShape', ],
            'output' => [ 'shape' => 'QueryBankListResponseShape', ],
        ],
        'QueryBankBranchList' => [
            'name' => 'QueryBankBranchList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/query:bankBranchList',
            ],
            'input' => [ 'shape' => 'QueryBankBranchListRequestShape', ],
            'output' => [ 'shape' => 'QueryBankBranchListResponseShape', ],
        ],
        'IDCard' => [
            'name' => 'IDCard',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ocr:IDCard',
            ],
            'input' => [ 'shape' => 'IDCardRequestShape', ],
            'output' => [ 'shape' => 'IDCardResponseShape', ],
        ],
        'DescribeApplyStatus' => [
            'name' => 'DescribeApplyStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/manage:applyStatus',
            ],
            'input' => [ 'shape' => 'DescribeApplyStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribeApplyStatusResponseShape', ],
        ],
    ],
    'shapes' => [
        'AccountInfoSimple' => [
            'type' => 'structure',
            'members' => [
                'orgName' => [ 'type' => 'string', 'locationName' => 'orgName', ],
                'bankCardNum' => [ 'type' => 'string', 'locationName' => 'bankCardNum', ],
                'bankCode' => [ 'type' => 'string', 'locationName' => 'bankCode', ],
            ],
        ],
        'AuthInfo' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'AccountInfo' => [
            'type' => 'structure',
            'members' => [
                'orgName' => [ 'type' => 'string', 'locationName' => 'orgName', ],
                'bankCardNum' => [ 'type' => 'string', 'locationName' => 'bankCardNum', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'bankName' => [ 'type' => 'string', 'locationName' => 'bankName', ],
                'branchBankName' => [ 'type' => 'string', 'locationName' => 'branchBankName', ],
                'bankCode' => [ 'type' => 'string', 'locationName' => 'bankCode', ],
                'cityCode' => [ 'type' => 'string', 'locationName' => 'cityCode', ],
                'provinceCode' => [ 'type' => 'string', 'locationName' => 'provinceCode', ],
            ],
        ],
        'LegalPersonSpec' => [
            'type' => 'structure',
            'members' => [
                'companyType' => [ 'type' => 'integer', 'locationName' => 'companyType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'idCode' => [ 'type' => 'string', 'locationName' => 'idCode', ],
                'legalPersonName' => [ 'type' => 'string', 'locationName' => 'legalPersonName', ],
                'legalPersonId' => [ 'type' => 'string', 'locationName' => 'legalPersonId', ],
            ],
        ],
        'AuthDetail' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
            ],
        ],
        'OCRInfo' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nation' => [ 'type' => 'string', 'locationName' => 'nation', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'idNumber' => [ 'type' => 'string', 'locationName' => 'idNumber', ],
                'birthday' => [ 'type' => 'string', 'locationName' => 'birthday', ],
                'gender' => [ 'type' => 'string', 'locationName' => 'gender', ],
            ],
        ],
        'CheckInfo' => [
            'type' => 'structure',
            'members' => [
                'paymentAmount' => [ 'type' => 'string', 'locationName' => 'paymentAmount', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
            ],
        ],
        'PersonalSpec' => [
            'type' => 'structure',
            'members' => [
                'checkType' => [ 'type' => 'integer', 'locationName' => 'checkType', ],
                'personalUser' =>  [ 'shape' => 'PersonalUser', ],
            ],
        ],
        'CompanyInfo' => [
            'type' => 'structure',
            'members' => [
                'companyType' => [ 'type' => 'integer', 'locationName' => 'companyType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'idCode' => [ 'type' => 'string', 'locationName' => 'idCode', ],
                'orgCode' => [ 'type' => 'string', 'locationName' => 'orgCode', ],
            ],
        ],
        'PersonalUser' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idCard' => [ 'type' => 'string', 'locationName' => 'idCard', ],
                'bankcard' => [ 'type' => 'string', 'locationName' => 'bankcard', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'imgBase64' => [ 'type' => 'string', 'locationName' => 'imgBase64', ],
            ],
        ],
        'StatisticInfo' => [
            'type' => 'structure',
            'members' => [
                'perAuthStatistic' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuthItem', ], ],
                'comAuthStatistic' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuthItem', ], ],
            ],
        ],
        'AuthItem' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'Rule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'vendor' => [ 'type' => 'integer', 'locationName' => 'vendor', ],
            ],
        ],
        'User' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'applyTime' => [ 'type' => 'string', 'locationName' => 'applyTime', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CodeList' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'UserList' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'RuleList' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'CodeDescription' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'QueryBankBranchListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryBankBranchListResultShape', ],
            ],
        ],
        'QueryProvinceListRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PersonalAuthResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'CheckCompanyInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyInfo' =>  [ 'shape' => 'CompanyInfo', ],
            ],
        ],
        'IDCardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageData' => [ 'type' => 'string', 'locationName' => 'imageData', ],
                'side' => [ 'type' => 'string', 'locationName' => 'side', ],
            ],
        ],
        'CheckCompanyInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'CompanyTransferSimpleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CompanyTransferSimpleResultShape', ],
            ],
        ],
        'CompanyTransferResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'CompanyTransferSimpleResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'PersonalAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalSpec' =>  [ 'shape' => 'PersonalSpec', ],
            ],
        ],
        'CompanyTransferSimpleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountInfo' =>  [ 'shape' => 'AccountInfoSimple', ],
            ],
        ],
        'PersonalAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PersonalAuthResultShape', ],
            ],
        ],
        'CompanyTransferRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountInfo' =>  [ 'shape' => 'AccountInfo', ],
            ],
        ],
        'QueryProvinceListResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'QueryCityListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryCityListResultShape', ],
            ],
        ],
        'QueryBankBranchListResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'CheckLegalPersonResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckLegalPersonResultShape', ],
            ],
        ],
        'CompanyTransferResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CompanyTransferResultShape', ],
            ],
        ],
        'QueryBankListRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CheckCompanyInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckCompanyInfoResultShape', ],
            ],
        ],
        'CheckLegalPersonResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'QueryCityListResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'QueryBankListResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'CheckCompanyTransferResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'IDCardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'IDCardResultShape', ],
            ],
        ],
        'QueryProvinceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryProvinceListResultShape', ],
            ],
        ],
        'CheckCompanyTransferRequestShape' => [
            'type' => 'structure',
            'members' => [
                'checkInfo' =>  [ 'shape' => 'CheckInfo', ],
            ],
        ],
        'CheckCompanyTransferResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckCompanyTransferResultShape', ],
            ],
        ],
        'CheckLegalPersonRequestShape' => [
            'type' => 'structure',
            'members' => [
                'legalPersonSpec' =>  [ 'shape' => 'LegalPersonSpec', ],
            ],
        ],
        'IDCardResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'nation' => [ 'type' => 'string', 'locationName' => 'nation', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'idNumber' => [ 'type' => 'string', 'locationName' => 'idNumber', ],
                'birthday' => [ 'type' => 'string', 'locationName' => 'birthday', ],
                'gender' => [ 'type' => 'string', 'locationName' => 'gender', ],
            ],
        ],
        'QueryBankListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryBankListResultShape', ],
            ],
        ],
        'QueryCityListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'provinceCode' => [ 'type' => 'string', 'locationName' => 'provinceCode', ],
            ],
        ],
        'QueryBankBranchListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bankCode' => [ 'type' => 'string', 'locationName' => 'bankCode', ],
                'cityCode' => [ 'type' => 'string', 'locationName' => 'cityCode', ],
            ],
        ],
        'DescribeApplyStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeApplyStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeApplyStatusResultShape', ],
            ],
        ],
        'DescribeApplyStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'applyTime' => [ 'type' => 'string', 'locationName' => 'applyTime', ],
            ],
        ],
    ],
];
