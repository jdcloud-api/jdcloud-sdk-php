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
    ],
];
