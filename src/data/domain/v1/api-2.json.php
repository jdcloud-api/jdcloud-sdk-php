<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'domain',
        'protocol' => 'json',
//        'serviceFullName' => 'domain',
//        'serviceId' => 'domain',
    ],
    'operations' => [
        'CheckDomain' => [
            'name' => 'CheckDomain',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain:check',
            ],
            'input' => [ 'shape' => 'CheckDomainRequestShape', ],
            'output' => [ 'shape' => 'CheckDomainResponseShape', ],
        ],
        'QueryWhoisInfo' => [
            'name' => 'QueryWhoisInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain:whoisInfo',
            ],
            'input' => [ 'shape' => 'QueryWhoisInfoRequestShape', ],
            'output' => [ 'shape' => 'QueryWhoisInfoResponseShape', ],
        ],
        'DomainInfo' => [
            'name' => 'DomainInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain',
            ],
            'input' => [ 'shape' => 'DomainInfoRequestShape', ],
            'output' => [ 'shape' => 'DomainInfoResponseShape', ],
        ],
        'CreateDomain' => [
            'name' => 'CreateDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain',
            ],
            'input' => [ 'shape' => 'CreateDomainRequestShape', ],
            'output' => [ 'shape' => 'CreateDomainResponseShape', ],
        ],
        'RenewDomain' => [
            'name' => 'RenewDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/renew',
            ],
            'input' => [ 'shape' => 'RenewDomainRequestShape', ],
            'output' => [ 'shape' => 'RenewDomainResponseShape', ],
        ],
        'TransferinDomainState' => [
            'name' => 'TransferinDomainState',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/transferin',
            ],
            'input' => [ 'shape' => 'TransferinDomainStateRequestShape', ],
            'output' => [ 'shape' => 'TransferinDomainStateResponseShape', ],
        ],
        'TransferinDomain' => [
            'name' => 'TransferinDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/transferin',
            ],
            'input' => [ 'shape' => 'TransferinDomainRequestShape', ],
            'output' => [ 'shape' => 'TransferinDomainResponseShape', ],
        ],
        'ModifyDns' => [
            'name' => 'ModifyDns',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/domain:dns',
            ],
            'input' => [ 'shape' => 'ModifyDnsRequestShape', ],
            'output' => [ 'shape' => 'ModifyDnsResponseShape', ],
        ],
        'DomainTemplateAssigned' => [
            'name' => 'DomainTemplateAssigned',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain:assigned',
            ],
            'input' => [ 'shape' => 'DomainTemplateAssignedRequestShape', ],
            'output' => [ 'shape' => 'DomainTemplateAssignedResponseShape', ],
        ],
        'DomainLock' => [
            'name' => 'DomainLock',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain:lock',
            ],
            'input' => [ 'shape' => 'DomainLockRequestShape', ],
            'output' => [ 'shape' => 'DomainLockResponseShape', ],
        ],
        'DomainUnLock' => [
            'name' => 'DomainUnLock',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain:unlock',
            ],
            'input' => [ 'shape' => 'DomainUnLockRequestShape', ],
            'output' => [ 'shape' => 'DomainUnLockResponseShape', ],
        ],
        'GetDomainTransferOutPassWord' => [
            'name' => 'GetDomainTransferOutPassWord',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain:transferOut',
            ],
            'input' => [ 'shape' => 'GetDomainTransferOutPassWordRequestShape', ],
            'output' => [ 'shape' => 'GetDomainTransferOutPassWordResponseShape', ],
        ],
        'CreateTemplate' => [
            'name' => 'CreateTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/template',
            ],
            'input' => [ 'shape' => 'CreateTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreateTemplateResponseShape', ],
        ],
        'QueryTemplateInfo' => [
            'name' => 'QueryTemplateInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/template/{templateId}',
            ],
            'input' => [ 'shape' => 'QueryTemplateInfoRequestShape', ],
            'output' => [ 'shape' => 'QueryTemplateInfoResponseShape', ],
        ],
        'ModifyTemplateInfo' => [
            'name' => 'ModifyTemplateInfo',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/template/{templateId}',
            ],
            'input' => [ 'shape' => 'ModifyTemplateInfoRequestShape', ],
            'output' => [ 'shape' => 'ModifyTemplateInfoResponseShape', ],
        ],
        'DeleteTemplate' => [
            'name' => 'DeleteTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/template/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteTemplateResponseShape', ],
        ],
        'CertificateTemplateState' => [
            'name' => 'CertificateTemplateState',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/template/{templateId}/certificate',
            ],
            'input' => [ 'shape' => 'CertificateTemplateStateRequestShape', ],
            'output' => [ 'shape' => 'CertificateTemplateStateResponseShape', ],
        ],
        'CertificateTemplate' => [
            'name' => 'CertificateTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/template/{templateId}/certificate',
            ],
            'input' => [ 'shape' => 'CertificateTemplateRequestShape', ],
            'output' => [ 'shape' => 'CertificateTemplateResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
