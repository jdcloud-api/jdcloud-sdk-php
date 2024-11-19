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
        'PersonalBankcard3Detail' => [
            'name' => 'PersonalBankcard3Detail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/detail:bankcard3',
            ],
            'input' => [ 'shape' => 'PersonalBankcard3DetailRequestShape', ],
            'output' => [ 'shape' => 'PersonalBankcard3DetailResponseShape', ],
        ],
        'PersonalBankcard3Other' => [
            'name' => 'PersonalBankcard3Other',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/other:bankcard3',
            ],
            'input' => [ 'shape' => 'PersonalBankcard3OtherRequestShape', ],
            'output' => [ 'shape' => 'PersonalBankcard3OtherResponseShape', ],
        ],
        'PersonalBankcard4Detail' => [
            'name' => 'PersonalBankcard4Detail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/detail:bankcard4',
            ],
            'input' => [ 'shape' => 'PersonalBankcard4DetailRequestShape', ],
            'output' => [ 'shape' => 'PersonalBankcard4DetailResponseShape', ],
        ],
        'PersonalBankcard4Other' => [
            'name' => 'PersonalBankcard4Other',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/other:bankcard4',
            ],
            'input' => [ 'shape' => 'PersonalBankcard4OtherRequestShape', ],
            'output' => [ 'shape' => 'PersonalBankcard4OtherResponseShape', ],
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
        'QueryCompanyTransfer' => [
            'name' => 'QueryCompanyTransfer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:transferStatus',
            ],
            'input' => [ 'shape' => 'QueryCompanyTransferRequestShape', ],
            'output' => [ 'shape' => 'QueryCompanyTransferResponseShape', ],
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
        'BankCardOCR' => [
            'name' => 'BankCardOCR',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ocr:BankCard',
            ],
            'input' => [ 'shape' => 'BankCardOCRRequestShape', ],
            'output' => [ 'shape' => 'BankCardOCRResponseShape', ],
        ],
        'BusinessOCR' => [
            'name' => 'BusinessOCR',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ocr:Business',
            ],
            'input' => [ 'shape' => 'BusinessOCRRequestShape', ],
            'output' => [ 'shape' => 'BusinessOCRResponseShape', ],
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
        'GetAliveUrlNew' => [
            'name' => 'GetAliveUrlNew',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/alive:getUrlNew',
            ],
            'input' => [ 'shape' => 'GetAliveUrlNewRequestShape', ],
            'output' => [ 'shape' => 'GetAliveUrlNewResponseShape', ],
        ],
        'GetAliveResultNew' => [
            'name' => 'GetAliveResultNew',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/alive:getResultNew',
            ],
            'input' => [ 'shape' => 'GetAliveResultNewRequestShape', ],
            'output' => [ 'shape' => 'GetAliveResultNewResponseShape', ],
        ],
        'OneClick' => [
            'name' => 'OneClick',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/oneClick:login',
            ],
            'input' => [ 'shape' => 'OneClickRequestShape', ],
            'output' => [ 'shape' => 'OneClickResponseShape', ],
        ],
        'AddressInfo' => [
            'name' => 'AddressInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/address:info',
            ],
            'input' => [ 'shape' => 'AddressInfoRequestShape', ],
            'output' => [ 'shape' => 'AddressInfoResponseShape', ],
        ],
        'AddressDetail' => [
            'name' => 'AddressDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/address:detail',
            ],
            'input' => [ 'shape' => 'AddressDetailRequestShape', ],
            'output' => [ 'shape' => 'AddressDetailResponseShape', ],
        ],
        'MobileStatus' => [
            'name' => 'MobileStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/mobile:status',
            ],
            'input' => [ 'shape' => 'MobileStatusRequestShape', ],
            'output' => [ 'shape' => 'MobileStatusResponseShape', ],
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
        'BusinessOCRInfo' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'number' => [ 'type' => 'string', 'locationName' => 'number', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'companyType' => [ 'type' => 'string', 'locationName' => 'companyType', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'legalPersonal' => [ 'type' => 'string', 'locationName' => 'legalPersonal', ],
                'registeredCapital' => [ 'type' => 'string', 'locationName' => 'registeredCapital', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'registrationDate' => [ 'type' => 'string', 'locationName' => 'registrationDate', ],
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
            ],
        ],
        'PersonalBankcard' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idCard' => [ 'type' => 'string', 'locationName' => 'idCard', ],
                'bankCard' => [ 'type' => 'string', 'locationName' => 'bankCard', ],
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
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
            ],
        ],
        'CompanyInfo' => [
            'type' => 'structure',
            'members' => [
                'companyType' => [ 'type' => 'integer', 'locationName' => 'companyType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'idCode' => [ 'type' => 'string', 'locationName' => 'idCode', ],
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
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
            ],
        ],
        'AliveResultInfo' => [
            'type' => 'structure',
            'members' => [
                'faceImage' => [ 'type' => 'string', 'locationName' => 'faceImage', ],
                'sceneImage' => [ 'type' => 'string', 'locationName' => 'sceneImage', ],
                'video' => [ 'type' => 'string', 'locationName' => 'video', ],
                'h5Result' => [ 'type' => 'string', 'locationName' => 'h5Result', ],
                'smResult' => [ 'type' => 'string', 'locationName' => 'smResult', ],
                'rxResult' => [ 'type' => 'string', 'locationName' => 'rxResult', ],
                'score' => [ 'type' => 'string', 'locationName' => 'score', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'h5ChargeFlag' => [ 'type' => 'integer', 'locationName' => 'h5ChargeFlag', ],
                'rxChargeFlag' => [ 'type' => 'integer', 'locationName' => 'rxChargeFlag', ],
            ],
        ],
        'PersonalBankcardOther' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idCard' => [ 'type' => 'string', 'locationName' => 'idCard', ],
                'bankCard' => [ 'type' => 'string', 'locationName' => 'bankCard', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'idType' => [ 'type' => 'string', 'locationName' => 'idType', ],
            ],
        ],
        'Data' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'repairedAddressDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'RepairedAddressDetail', ], ],
            ],
        ],
        'AuthDetail' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
            ],
        ],
        'BankCardOCRInfo' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'number' => [ 'type' => 'string', 'locationName' => 'number', ],
                'cardType' => [ 'type' => 'string', 'locationName' => 'cardType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'bank' => [ 'type' => 'string', 'locationName' => 'bank', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
            ],
        ],
        'CheckInfo' => [
            'type' => 'structure',
            'members' => [
                'paymentAmount' => [ 'type' => 'string', 'locationName' => 'paymentAmount', ],
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
            ],
        ],
        'RepairedAddressDetail' => [
            'type' => 'structure',
            'members' => [
                'repairStatus' => [ 'type' => 'integer', 'locationName' => 'repairStatus', ],
                'repairedId' => [ 'type' => 'long', 'locationName' => 'repairedId', ],
                'reliability' => [ 'type' => 'string', 'locationName' => 'reliability', ],
                'activeTime' => [ 'type' => 'string', 'locationName' => 'activeTime', ],
                'addressType' => [ 'type' => 'string', 'locationName' => 'addressType', ],
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
        'AddressInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'AddressDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'comment' => [ 'type' => 'string', 'locationName' => 'comment', ],
                'repairedAddressDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'RepairedAddressDetail', ], ],
            ],
        ],
        'PersonalBankcard3DetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PersonalBankcard3DetailResultShape', ],
            ],
        ],
        'CompanyTransferSimpleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CompanyTransferSimpleResultShape', ],
            ],
        ],
        'PersonalBankcard4DetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'GetAliveResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetAliveResultResultShape', ],
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
        'GetAliveUrlNewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idcard' => [ 'type' => 'string', 'locationName' => 'idcard', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
                'actions' => [ 'type' => 'string', 'locationName' => 'actions', ],
                'showFail' => [ 'type' => 'boolean', 'locationName' => 'showFail', ],
                'photo' => [ 'type' => 'string', 'locationName' => 'photo', ],
                'photoThresh' => [ 'type' => 'integer', 'locationName' => 'photoThresh', ],
            ],
        ],
        'GetAliveResultNewResultShape' => [
            'type' => 'structure',
            'members' => [
                'faceImage' => [ 'type' => 'string', 'locationName' => 'faceImage', ],
                'sceneImage' => [ 'type' => 'string', 'locationName' => 'sceneImage', ],
                'video' => [ 'type' => 'string', 'locationName' => 'video', ],
                'h5Result' => [ 'type' => 'string', 'locationName' => 'h5Result', ],
                'smResult' => [ 'type' => 'string', 'locationName' => 'smResult', ],
                'rxResult' => [ 'type' => 'string', 'locationName' => 'rxResult', ],
                'score' => [ 'type' => 'string', 'locationName' => 'score', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'h5ChargeFlag' => [ 'type' => 'integer', 'locationName' => 'h5ChargeFlag', ],
                'rxChargeFlag' => [ 'type' => 'integer', 'locationName' => 'rxChargeFlag', ],
            ],
        ],
        'PersonalAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PersonalAuthResultShape', ],
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
        'BankCardOCRResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'number' => [ 'type' => 'string', 'locationName' => 'number', ],
                'cardType' => [ 'type' => 'string', 'locationName' => 'cardType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'bank' => [ 'type' => 'string', 'locationName' => 'bank', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
            ],
        ],
        'CheckCompanyInfo3RequestShape' => [
            'type' => 'structure',
            'members' => [
                'companyInfo3Spec' =>  [ 'shape' => 'CompanyInfo3Spec', ],
            ],
        ],
        'GetAliveResultNewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
            ],
        ],
        'BusinessOCRResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'number' => [ 'type' => 'string', 'locationName' => 'number', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'companyType' => [ 'type' => 'string', 'locationName' => 'companyType', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'legalPersonal' => [ 'type' => 'string', 'locationName' => 'legalPersonal', ],
                'registeredCapital' => [ 'type' => 'string', 'locationName' => 'registeredCapital', ],
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'registrationDate' => [ 'type' => 'string', 'locationName' => 'registrationDate', ],
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
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
        'BusinessOCRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BusinessOCRResultShape', ],
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
        'GetAliveUrlNewResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
            ],
        ],
        'CheckCompanyTransferRequestShape' => [
            'type' => 'structure',
            'members' => [
                'checkInfo' =>  [ 'shape' => 'CheckInfo', ],
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
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
            ],
        ],
        'MobileStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
            ],
        ],
        'OneClickResultShape' => [
            'type' => 'structure',
            'members' => [
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
                'msisdn' => [ 'type' => 'string', 'locationName' => 'msisdn', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'MobileStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'mnpStatus' => [ 'type' => 'string', 'locationName' => 'mnpStatus', ],
            ],
        ],
        'GetAliveUrlNewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetAliveUrlNewResultShape', ],
            ],
        ],
        'QueryCompanyTransferResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
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
                'video' => [ 'type' => 'string', 'locationName' => 'video', ],
                'h5Result' => [ 'type' => 'string', 'locationName' => 'h5Result', ],
                'smResult' => [ 'type' => 'string', 'locationName' => 'smResult', ],
                'rxResult' => [ 'type' => 'string', 'locationName' => 'rxResult', ],
                'score' => [ 'type' => 'string', 'locationName' => 'score', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'h5ChargeFlag' => [ 'type' => 'integer', 'locationName' => 'h5ChargeFlag', ],
                'rxChargeFlag' => [ 'type' => 'integer', 'locationName' => 'rxChargeFlag', ],
            ],
        ],
        'IDCardRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageData' => [ 'type' => 'string', 'locationName' => 'imageData', ],
            ],
        ],
        'CheckCompanyInfo3ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckCompanyInfo3ResultShape', ],
            ],
        ],
        'GetAliveResultNewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetAliveResultNewResultShape', ],
            ],
        ],
        'PersonalBankcard4DetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalSpec' =>  [ 'shape' => 'PersonalBankcard', ],
            ],
        ],
        'CheckLegalPersonDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'legalPersonSpec' =>  [ 'shape' => 'LegalPersonSpec', ],
            ],
        ],
        'OneClickResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'OneClickResultShape', ],
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
        'GetAliveUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idcard' => [ 'type' => 'string', 'locationName' => 'idcard', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
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
        'BankCardOCRRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageData' => [ 'type' => 'string', 'locationName' => 'imageData', ],
            ],
        ],
        'CheckLegalPersonRequestShape' => [
            'type' => 'structure',
            'members' => [
                'legalPersonSpec' =>  [ 'shape' => 'LegalPersonSpec', ],
            ],
        ],
        'QueryBankBranchListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bankCode' => [ 'type' => 'string', 'locationName' => 'bankCode', ],
                'cityCode' => [ 'type' => 'string', 'locationName' => 'cityCode', ],
            ],
        ],
        'QueryCompanyTransferRequestShape' => [
            'type' => 'structure',
            'members' => [
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
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
        'CompanyTransferSimpleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountInfo' =>  [ 'shape' => 'AccountInfoSimple', ],
            ],
        ],
        'CompanyTransferRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountInfo' =>  [ 'shape' => 'AccountInfo', ],
            ],
        ],
        'QueryCityListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryCityListResultShape', ],
            ],
        ],
        'AddressInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'idNumber' => [ 'type' => 'string', 'locationName' => 'idNumber', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'customerCode' => [ 'type' => 'string', 'locationName' => 'customerCode', ],
            ],
        ],
        'CheckCompanyInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckCompanyInfoResultShape', ],
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
        'BankCardOCRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BankCardOCRResultShape', ],
            ],
        ],
        'PersonalBankcard4OtherRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalSpec' =>  [ 'shape' => 'PersonalBankcardOther', ],
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
        'CheckCompanyTransferResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckCompanyTransferResultShape', ],
            ],
        ],
        'PersonalBankcard4OtherResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PersonalBankcard4OtherResultShape', ],
            ],
        ],
        'QueryBankListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryBankListResultShape', ],
            ],
        ],
        'PersonalBankcard3DetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'QueryCompanyTransferResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryCompanyTransferResultShape', ],
            ],
        ],
        'PersonalBankcard4OtherResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'OneClickRequestShape' => [
            'type' => 'structure',
            'members' => [
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'userInformation' => [ 'type' => 'string', 'locationName' => 'userInformation', ],
                'appType' => [ 'type' => 'integer', 'locationName' => 'appType', ],
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
        'PersonalBankcard3OtherResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'PersonalBankcard3DetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalSpec' =>  [ 'shape' => 'PersonalBankcard', ],
            ],
        ],
        'PersonalBankcard3OtherRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalSpec' =>  [ 'shape' => 'PersonalBankcardOther', ],
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
        'PersonalBankcard4DetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PersonalBankcard4DetailResultShape', ],
            ],
        ],
        'MobileStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'MobileStatusResultShape', ],
            ],
        ],
        'AddressInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AddressInfoResultShape', ],
            ],
        ],
        'PersonalBankcard3OtherResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PersonalBankcard3OtherResultShape', ],
            ],
        ],
        'PersonalAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalSpec' =>  [ 'shape' => 'PersonalSpec', ],
            ],
        ],
        'AddressDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AddressDetailResultShape', ],
            ],
        ],
        'BusinessOCRRequestShape' => [
            'type' => 'structure',
            'members' => [
                'imageData' => [ 'type' => 'string', 'locationName' => 'imageData', ],
            ],
        ],
        'PersonalMobileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PersonalMobileResultShape', ],
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
        'AddressDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'customerCode' => [ 'type' => 'string', 'locationName' => 'customerCode', ],
            ],
        ],
        'QueryBankListRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'GetAliveUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'chargeFlag' => [ 'type' => 'string', 'locationName' => 'chargeFlag', ],
            ],
        ],
        'PersonalMobileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalMobileSpec' =>  [ 'shape' => 'PersonalMobileSpec', ],
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
