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
        'CheckAgent' => [
            'name' => 'CheckAgent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:agent',
            ],
            'input' => [ 'shape' => 'CheckAgentRequestShape', ],
            'output' => [ 'shape' => 'CheckAgentResponseShape', ],
        ],
        'CheckLegalPersonAndAgent' => [
            'name' => 'CheckLegalPersonAndAgent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/company:legalPersonAndAgent',
            ],
            'input' => [ 'shape' => 'CheckLegalPersonAndAgentRequestShape', ],
            'output' => [ 'shape' => 'CheckLegalPersonAndAgentResponseShape', ],
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
        'AgentSpec' => [
            'type' => 'structure',
            'members' => [
                'companyType' => [ 'type' => 'integer', 'locationName' => 'companyType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'idCode' => [ 'type' => 'string', 'locationName' => 'idCode', ],
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
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
        'LegalPersonAndAgentSpec' => [
            'type' => 'structure',
            'members' => [
                'companyType' => [ 'type' => 'integer', 'locationName' => 'companyType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'idCode' => [ 'type' => 'string', 'locationName' => 'idCode', ],
                'legalPersonName' => [ 'type' => 'string', 'locationName' => 'legalPersonName', ],
                'legalPersonId' => [ 'type' => 'string', 'locationName' => 'legalPersonId', ],
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
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
        'CheckAgentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agentSpec' =>  [ 'shape' => 'AgentSpec', ],
            ],
        ],
        'CheckAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckAgentResultShape', ],
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
        'CheckLegalPersonAndAgentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'legalPersonAndAgentSpec' =>  [ 'shape' => 'LegalPersonAndAgentSpec', ],
            ],
        ],
        'PersonalAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'personalSpec' =>  [ 'shape' => 'PersonalSpec', ],
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
        'CheckLegalPersonAndAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckLegalPersonAndAgentResultShape', ],
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
        'CheckLegalPersonAndAgentResultShape' => [
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
        'CheckAgentResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'hasException' => [ 'type' => 'boolean', 'locationName' => 'hasException', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
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
