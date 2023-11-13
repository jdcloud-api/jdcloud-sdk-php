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
        'PersonalMobile' => [
            'name' => 'PersonalMobile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/detail:mobile3',
            ],
            'input' => [ 'shape' => 'PersonalMobileRequestShape', ],
            'output' => [ 'shape' => 'PersonalMobileResponseShape', ],
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
        'CheckLegalPersonDetail' => [
            'name' => 'CheckLegalPersonDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:legalPersonDetail',
            ],
            'input' => [ 'shape' => 'CheckLegalPersonDetailRequestShape', ],
            'output' => [ 'shape' => 'CheckLegalPersonDetailResponseShape', ],
        ],
        'CheckCompanyInfo3' => [
            'name' => 'CheckCompanyInfo3',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:info3',
            ],
            'input' => [ 'shape' => 'CheckCompanyInfo3RequestShape', ],
            'output' => [ 'shape' => 'CheckCompanyInfo3ResponseShape', ],
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
        'GetAliveUrl' => [
            'name' => 'GetAliveUrl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/alive:getUrl',
            ],
            'input' => [ 'shape' => 'GetAliveUrlRequestShape', ],
            'output' => [ 'shape' => 'GetAliveUrlResponseShape', ],
        ],
        'GetAliveResult' => [
            'name' => 'GetAliveResult',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/alive:getResult',
            ],
            'input' => [ 'shape' => 'GetAliveResultRequestShape', ],
            'output' => [ 'shape' => 'GetAliveResultResponseShape', ],
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
        'PersonalMobileSpec' => [
            'type' => 'structure',
            'members' => [
                'personalUser' =>  [ 'shape' => 'PersonalMobile3', ],
            ],
        ],
        'PersonalMobile3' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idCard' => [ 'type' => 'string', 'locationName' => 'idCard', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
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
                'authority' => [ 'type' => 'string', 'locationName' => 'authority', ],
                'issueTime' => [ 'type' => 'string', 'locationName' => 'issueTime', ],
                'dueTime' => [ 'type' => 'string', 'locationName' => 'dueTime', ],
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
        'AccountInfoSimple' => [
            'type' => 'structure',
            'members' => [
                'orgName' => [ 'type' => 'string', 'locationName' => 'orgName', ],
                'bankCardNum' => [ 'type' => 'string', 'locationName' => 'bankCardNum', ],
                'bankCode' => [ 'type' => 'string', 'locationName' => 'bankCode', ],
            ],
        ],
        'CompanyInfo3Spec' => [
            'type' => 'structure',
            'members' => [
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'idCode' => [ 'type' => 'string', 'locationName' => 'idCode', ],
                'legalPersonName' => [ 'type' => 'string', 'locationName' => 'legalPersonName', ],
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
        'AliveUrlInfo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'AliveResultInfo' => [
            'type' => 'structure',
            'members' => [
                'faceImage' => [ 'type' => 'string', 'locationName' => 'faceImage', ],
                'sceneImage' => [ 'type' => 'string', 'locationName' => 'sceneImage', ],
                'h5Result' => [ 'type' => 'string', 'locationName' => 'h5Result', ],
                'smResult' => [ 'type' => 'string', 'locationName' => 'smResult', ],
                'rxResult' => [ 'type' => 'string', 'locationName' => 'rxResult', ],
                'score' => [ 'type' => 'string', 'locationName' => 'score', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
            ],
        ],
        'AuthDetail' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
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
        'CheckCompanyInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyInfo' =>  [ 'shape' => 'CompanyInfo', ],
            ],
        ],
        'CompanyTransferSimpleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CompanyTransferSimpleResultShape', ],
            ],
        ],
        'GetAliveResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetAliveResultResultShape', ],
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
        'CheckCompanyInfo3RequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyInfo3Spec' =>  [ 'shape' => 'CompanyInfo3Spec', ],
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
        'QueryProvinceListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryProvinceListResultShape', ],
            ],
        ],
        'CheckCompanyInfo3ResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
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
                'authority' => [ 'type' => 'string', 'locationName' => 'authority', ],
                'issueTime' => [ 'type' => 'string', 'locationName' => 'issueTime', ],
                'dueTime' => [ 'type' => 'string', 'locationName' => 'dueTime', ],
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
        'GetAliveResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
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
        'GetAliveResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'faceImage' => [ 'type' => 'string', 'locationName' => 'faceImage', ],
                'sceneImage' => [ 'type' => 'string', 'locationName' => 'sceneImage', ],
                'h5Result' => [ 'type' => 'string', 'locationName' => 'h5Result', ],
                'smResult' => [ 'type' => 'string', 'locationName' => 'smResult', ],
                'rxResult' => [ 'type' => 'string', 'locationName' => 'rxResult', ],
                'score' => [ 'type' => 'string', 'locationName' => 'score', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
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
        'CheckCompanyInfo3ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckCompanyInfo3ResultShape', ],
            ],
        ],
        'PersonalAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalSpec' =>  [ 'shape' => 'PersonalSpec', ],
            ],
        ],
        'PersonalMobileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PersonalMobileResultShape', ],
            ],
        ],
        'CheckLegalPersonDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'legalPersonSpec' =>  [ 'shape' => 'LegalPersonSpec', ],
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
        'GetAliveUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetAliveUrlResultShape', ],
            ],
        ],
        'CheckLegalPersonDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'GetAliveUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idcard' => [ 'type' => 'string', 'locationName' => 'idcard', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'CheckLegalPersonDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckLegalPersonDetailResultShape', ],
            ],
        ],
        'IDCardResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'IDCardResultShape', ],
            ],
        ],
        'PersonalMobileResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'CheckLegalPersonRequestShape' => [
            'type' => 'structure',
            'members' => [
                'legalPersonSpec' =>  [ 'shape' => 'LegalPersonSpec', ],
            ],
        ],
        'GetAliveUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'PersonalMobileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalMobileSpec' =>  [ 'shape' => 'PersonalMobileSpec', ],
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
