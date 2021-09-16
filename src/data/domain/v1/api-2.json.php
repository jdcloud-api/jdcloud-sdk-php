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
        'DomainWhoisInfo' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'whoisInfo' => [ 'type' => 'string', 'locationName' => 'whoisInfo', ],
            ],
        ],
        'CheckDomain' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'avail' => [ 'type' => 'integer', 'locationName' => 'avail', ],
            ],
        ],
        'DomainOrder' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'DomainInfo' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'domainState' => [ 'type' => 'integer', 'locationName' => 'domainState', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'startDate' => [ 'type' => 'date', 'locationName' => 'startDate', ],
                'endDate' => [ 'type' => 'date', 'locationName' => 'endDate', ],
                'cloudDnsId' => [ 'type' => 'string', 'locationName' => 'cloudDnsId', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
            ],
        ],
        'AddTemplate' => [
            'type' => 'structure',
            'members' => [
                'userNameCh' => [ 'type' => 'string', 'locationName' => 'userNameCh', ],
                'userNameEn1' => [ 'type' => 'string', 'locationName' => 'userNameEn1', ],
                'userNameEn2' => [ 'type' => 'string', 'locationName' => 'userNameEn2', ],
                'ownerNameCh' => [ 'type' => 'string', 'locationName' => 'ownerNameCh', ],
                'ownerNameEn' => [ 'type' => 'string', 'locationName' => 'ownerNameEn', ],
                'nationCodeCh' => [ 'type' => 'string', 'locationName' => 'nationCodeCh', ],
                'nationCodeEn' => [ 'type' => 'string', 'locationName' => 'nationCodeEn', ],
                'provinceCodeCh' => [ 'type' => 'string', 'locationName' => 'provinceCodeCh', ],
                'provinceCodeEn' => [ 'type' => 'string', 'locationName' => 'provinceCodeEn', ],
                'cityCodeCh' => [ 'type' => 'string', 'locationName' => 'cityCodeCh', ],
                'cityCodeEn' => [ 'type' => 'string', 'locationName' => 'cityCodeEn', ],
                'addressCh' => [ 'type' => 'string', 'locationName' => 'addressCh', ],
                'addressEn' => [ 'type' => 'string', 'locationName' => 'addressEn', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'fax' => [ 'type' => 'string', 'locationName' => 'fax', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'ownerType' => [ 'type' => 'integer', 'locationName' => 'ownerType', ],
            ],
        ],
        'ModifyTemplate' => [
            'type' => 'structure',
            'members' => [
                'nationCodeCh' => [ 'type' => 'string', 'locationName' => 'nationCodeCh', ],
                'nationCodeEn' => [ 'type' => 'string', 'locationName' => 'nationCodeEn', ],
                'provinceCodeCh' => [ 'type' => 'string', 'locationName' => 'provinceCodeCh', ],
                'provinceCodeEn' => [ 'type' => 'string', 'locationName' => 'provinceCodeEn', ],
                'cityCodeCh' => [ 'type' => 'string', 'locationName' => 'cityCodeCh', ],
                'cityCodeEn' => [ 'type' => 'string', 'locationName' => 'cityCodeEn', ],
                'addressCh' => [ 'type' => 'string', 'locationName' => 'addressCh', ],
                'addressEn' => [ 'type' => 'string', 'locationName' => 'addressEn', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'fax' => [ 'type' => 'string', 'locationName' => 'fax', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'ownerType' => [ 'type' => 'integer', 'locationName' => 'ownerType', ],
            ],
        ],
        'TemplateInfo' => [
            'type' => 'structure',
            'members' => [
                'userNameCh' => [ 'type' => 'string', 'locationName' => 'userNameCh', ],
                'userNameEn1' => [ 'type' => 'string', 'locationName' => 'userNameEn1', ],
                'userNameEn2' => [ 'type' => 'string', 'locationName' => 'userNameEn2', ],
                'ownerNameCh' => [ 'type' => 'string', 'locationName' => 'ownerNameCh', ],
                'ownerNameEn' => [ 'type' => 'string', 'locationName' => 'ownerNameEn', ],
                'nationCodeCh' => [ 'type' => 'string', 'locationName' => 'nationCodeCh', ],
                'nationCodeEn' => [ 'type' => 'string', 'locationName' => 'nationCodeEn', ],
                'provinceCodeCh' => [ 'type' => 'string', 'locationName' => 'provinceCodeCh', ],
                'provinceCodeEn' => [ 'type' => 'string', 'locationName' => 'provinceCodeEn', ],
                'cityCodeCh' => [ 'type' => 'string', 'locationName' => 'cityCodeCh', ],
                'cityCodeEn' => [ 'type' => 'string', 'locationName' => 'cityCodeEn', ],
                'addressCh' => [ 'type' => 'string', 'locationName' => 'addressCh', ],
                'addressEn' => [ 'type' => 'string', 'locationName' => 'addressEn', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'fax' => [ 'type' => 'string', 'locationName' => 'fax', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'ownerType' => [ 'type' => 'integer', 'locationName' => 'ownerType', ],
                'certificateStatus' => [ 'type' => 'integer', 'locationName' => 'certificateStatus', ],
                'certificateUnpassReason' => [ 'type' => 'string', 'locationName' => 'certificateUnpassReason', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
            ],
        ],
        'CreateDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'term' => [ 'type' => 'integer', 'locationName' => 'term', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TransferinDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TransferinDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'TransferinDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DomainOrder', ],
            ],
        ],
        'QueryWhoisInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RenewDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DomainOrder', ],
            ],
        ],
        'CheckDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DomainOrder', ],
            ],
        ],
        'TransferinDomainStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'transferInState' => [ 'type' => 'integer', 'locationName' => 'transferInState', ],
            ],
        ],
        'TransferinDomainStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'TransferinDomainStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DomainInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CheckDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CheckDomain', ],
            ],
        ],
        'DomainInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DomainInfo', ],
            ],
        ],
        'TransferinDomainStateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryWhoisInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryWhoisInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RenewDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RenewDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryWhoisInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DomainWhoisInfo', ],
            ],
        ],
        'DomainInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DomainInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RenewDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'term' => [ 'type' => 'integer', 'locationName' => 'term', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'TransferinDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'passWord' => [ 'type' => 'string', 'locationName' => 'passWord', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DomainUnLockResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainTransferOutPassWordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainTransferOutPassWordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyDnsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DomainLockResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DomainUnLockResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DomainTemplateAssignedResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainTransferOutPassWordResultShape' => [
            'type' => 'structure',
            'members' => [
                'passWord' => [ 'type' => 'string', 'locationName' => 'passWord', ],
            ],
        ],
        'DomainLockResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyDnsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DomainTemplateAssignedResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainTransferOutPassWordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DomainUnLockRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DomainLockRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyDnsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'dns' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DomainTemplateAssignedRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CertificateTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'CreateTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userNameCh' => [ 'type' => 'string', 'locationName' => 'userNameCh', ],
                'userNameEn1' => [ 'type' => 'string', 'locationName' => 'userNameEn1', ],
                'userNameEn2' => [ 'type' => 'string', 'locationName' => 'userNameEn2', ],
                'ownerNameCh' => [ 'type' => 'string', 'locationName' => 'ownerNameCh', ],
                'ownerNameEn' => [ 'type' => 'string', 'locationName' => 'ownerNameEn', ],
                'nationCodeCh' => [ 'type' => 'string', 'locationName' => 'nationCodeCh', ],
                'nationCodeEn' => [ 'type' => 'string', 'locationName' => 'nationCodeEn', ],
                'provinceCodeCh' => [ 'type' => 'string', 'locationName' => 'provinceCodeCh', ],
                'provinceCodeEn' => [ 'type' => 'string', 'locationName' => 'provinceCodeEn', ],
                'cityCodeCh' => [ 'type' => 'string', 'locationName' => 'cityCodeCh', ],
                'cityCodeEn' => [ 'type' => 'string', 'locationName' => 'cityCodeEn', ],
                'addressCh' => [ 'type' => 'string', 'locationName' => 'addressCh', ],
                'addressEn' => [ 'type' => 'string', 'locationName' => 'addressEn', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'fax' => [ 'type' => 'string', 'locationName' => 'fax', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'ownerType' => [ 'type' => 'integer', 'locationName' => 'ownerType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyTemplateInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyTemplateInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTemplateInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'TemplateInfo', ],
            ],
        ],
        'DeleteTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'CertificateTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'identityNo' => [ 'type' => 'string', 'locationName' => 'identityNo', ],
                'identityType' => [ 'type' => 'string', 'locationName' => 'identityType', ],
                'file' => [ 'type' => 'string', 'locationName' => 'file', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'CertificateTemplateStateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CertificateTemplateStateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CertificateTemplateStateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'CertificateTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CertificateTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyTemplateInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nationCodeCh' => [ 'type' => 'string', 'locationName' => 'nationCodeCh', ],
                'nationCodeEn' => [ 'type' => 'string', 'locationName' => 'nationCodeEn', ],
                'provinceCodeCh' => [ 'type' => 'string', 'locationName' => 'provinceCodeCh', ],
                'provinceCodeEn' => [ 'type' => 'string', 'locationName' => 'provinceCodeEn', ],
                'cityCodeCh' => [ 'type' => 'string', 'locationName' => 'cityCodeCh', ],
                'cityCodeEn' => [ 'type' => 'string', 'locationName' => 'cityCodeEn', ],
                'addressCh' => [ 'type' => 'string', 'locationName' => 'addressCh', ],
                'addressEn' => [ 'type' => 'string', 'locationName' => 'addressEn', ],
                'zipCode' => [ 'type' => 'string', 'locationName' => 'zipCode', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'fax' => [ 'type' => 'string', 'locationName' => 'fax', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'ownerType' => [ 'type' => 'integer', 'locationName' => 'ownerType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'QueryTemplateInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'ModifyTemplateInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'CertificateTemplateStateResultShape' => [
            'type' => 'structure',
            'members' => [
                'certificateState' => [ 'type' => 'integer', 'locationName' => 'certificateState', ],
                'certificateUnpassReason' => [ 'type' => 'string', 'locationName' => 'certificateUnpassReason', ],
            ],
        ],
        'CreateTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'long', 'locationName' => 'templateId', ],
            ],
        ],
        'QueryTemplateInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTemplateInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
