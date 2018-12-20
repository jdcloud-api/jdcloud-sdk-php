<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'httpdns',
        'protocol' => 'json',
//        'serviceFullName' => 'httpdns',
//        'serviceId' => 'httpdns',
    ],
    'operations' => [
        'GetAccountId' => [
            'name' => 'GetAccountId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/account',
            ],
            'input' => [ 'shape' => 'GetAccountIdRequestShape', ],
            'output' => [ 'shape' => 'GetAccountIdResponseShape', ],
        ],
        'CreateAccount' => [
            'name' => 'CreateAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/account/createAccount',
            ],
            'input' => [ 'shape' => 'CreateAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountResponseShape', ],
        ],
        'GetAccountInfo' => [
            'name' => 'GetAccountInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/accountInfo',
            ],
            'input' => [ 'shape' => 'GetAccountInfoRequestShape', ],
            'output' => [ 'shape' => 'GetAccountInfoResponseShape', ],
        ],
        'OperateKey' => [
            'name' => 'OperateKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/account/operateKey',
            ],
            'input' => [ 'shape' => 'OperateKeyRequestShape', ],
            'output' => [ 'shape' => 'OperateKeyResponseShape', ],
        ],
        'GetDomains' => [
            'name' => 'GetDomains',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain',
            ],
            'input' => [ 'shape' => 'GetDomainsRequestShape', ],
            'output' => [ 'shape' => 'GetDomainsResponseShape', ],
        ],
        'AddDomains' => [
            'name' => 'AddDomains',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/addDomain',
            ],
            'input' => [ 'shape' => 'AddDomainsRequestShape', ],
            'output' => [ 'shape' => 'AddDomainsResponseShape', ],
        ],
        'DelDomains' => [
            'name' => 'DelDomains',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/delDomain',
            ],
            'input' => [ 'shape' => 'DelDomainsRequestShape', ],
            'output' => [ 'shape' => 'DelDomainsResponseShape', ],
        ],
    ],
    'shapes' => [
        'AccountId' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'accountId' => [ 'type' => 'string', 'locationName' => 'accountId', ],
            ],
        ],
        'Account' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'accountId' => [ 'type' => 'string', 'locationName' => 'accountId', ],
                'serviceIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'key' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'keyStatus' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'noauthAccess' => [ 'type' => 'integer', 'locationName' => 'noauthAccess', ],
                'domainLimit' => [ 'type' => 'integer', 'locationName' => 'domainLimit', ],
                'accountStatus' => [ 'type' => 'integer', 'locationName' => 'accountStatus', ],
            ],
        ],
        'DataplanInfo' => [
            'type' => 'structure',
            'members' => [
                'usedNumber' => [ 'type' => 'long', 'locationName' => 'usedNumber', ],
                'excessNumber' => [ 'type' => 'long', 'locationName' => 'excessNumber', ],
            ],
        ],
        'Dataplan' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'accountId' => [ 'type' => 'string', 'locationName' => 'accountId', ],
                'number' => [ 'type' => 'double', 'locationName' => 'number', ],
                'unit' => [ 'type' => 'integer', 'locationName' => 'unit', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'expireTime' => [ 'type' => 'long', 'locationName' => 'expireTime', ],
                'usedNumber' => [ 'type' => 'double', 'locationName' => 'usedNumber', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'isExpired' => [ 'type' => 'integer', 'locationName' => 'isExpired', ],
            ],
        ],
        'Domain' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'accountId' => [ 'type' => 'string', 'locationName' => 'accountId', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'queryCount' => [ 'type' => 'long', 'locationName' => 'queryCount', ],
                'isDelete' => [ 'type' => 'integer', 'locationName' => 'isDelete', ],
            ],
        ],
        'CountData' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'count' => [ 'type' => 'list', 'member' => [ 'shape' => 'Count', ], ],
            ],
        ],
        'Count' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'TotalcountData' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Totalcount', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'Totalcount' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
            ],
        ],
        'DomainData' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Domain', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'GetAccountInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAccountInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAccountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OperateKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Account', ],
            ],
        ],
        'GetAccountIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'OperateKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAccountInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Account', ],
            ],
        ],
        'OperateKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => '', 'locationName' => 'action', ],
                'key' => [ 'type' => '', 'locationName' => 'key', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetAccountInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetAccountIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAccountIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetAccountIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'AccountId', ],
            ],
        ],
        'AddDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainNames' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DomainData', ],
            ],
        ],
        'AddDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainNames' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
