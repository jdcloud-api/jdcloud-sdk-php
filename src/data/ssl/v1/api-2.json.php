<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ssl',
        'protocol' => 'json',
//        'serviceFullName' => 'ssl',
//        'serviceId' => 'ssl',
    ],
    'operations' => [
        'DescribeCerts' => [
            'name' => 'DescribeCerts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/sslCert',
            ],
            'input' => [ 'shape' => 'DescribeCertsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCertsResponseShape', ],
        ],
        'DescribeCert' => [
            'name' => 'DescribeCert',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/sslCert/{certId}',
            ],
            'input' => [ 'shape' => 'DescribeCertRequestShape', ],
            'output' => [ 'shape' => 'DescribeCertResponseShape', ],
        ],
        'DeleteCerts' => [
            'name' => 'DeleteCerts',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/sslCert/{certId}',
            ],
            'input' => [ 'shape' => 'DeleteCertsRequestShape', ],
            'output' => [ 'shape' => 'DeleteCertsResponseShape', ],
        ],
        'UploadCert' => [
            'name' => 'UploadCert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sslCert:upload',
            ],
            'input' => [ 'shape' => 'UploadCertRequestShape', ],
            'output' => [ 'shape' => 'UploadCertResponseShape', ],
        ],
        'DownloadCert' => [
            'name' => 'DownloadCert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sslCert:download',
            ],
            'input' => [ 'shape' => 'DownloadCertRequestShape', ],
            'output' => [ 'shape' => 'DownloadCertResponseShape', ],
        ],
        'UpdateCertName' => [
            'name' => 'UpdateCertName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sslCert:updateName',
            ],
            'input' => [ 'shape' => 'UpdateCertNameRequestShape', ],
            'output' => [ 'shape' => 'UpdateCertNameResponseShape', ],
        ],
        'UpdateCert' => [
            'name' => 'UpdateCert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sslCert:updateCert',
            ],
            'input' => [ 'shape' => 'UpdateCertRequestShape', ],
            'output' => [ 'shape' => 'UpdateCertResponseShape', ],
        ],
    ],
    'shapes' => [
        'CertBindInfo' => [
            'type' => 'structure',
            'members' => [
                'bindFrom' => [ 'type' => 'string', 'locationName' => 'bindFrom', ],
                'bindId' => [ 'type' => 'string', 'locationName' => 'bindId', ],
                'bindRegion' => [ 'type' => 'string', 'locationName' => 'bindRegion', ],
                'bindZone' => [ 'type' => 'string', 'locationName' => 'bindZone', ],
            ],
        ],
        'CertDescDetail' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'issuer' => [ 'type' => 'string', 'locationName' => 'issuer', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'usedBy' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertBindInfo', ], ],
            ],
        ],
        'CertListDetail' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'deletable' => [ 'type' => 'integer', 'locationName' => 'deletable', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downloadable' => [ 'type' => 'integer', 'locationName' => 'downloadable', ],
                'updateable' => [ 'type' => 'integer', 'locationName' => 'updateable', ],
                'certStatus' => [ 'type' => 'integer', 'locationName' => 'certStatus', ],
            ],
        ],
        'CertQuotaLimitDetail' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'freeUploadCertCount' => [ 'type' => 'integer', 'locationName' => 'freeUploadCertCount', ],
                'freeDVSingleCount' => [ 'type' => 'integer', 'locationName' => 'freeDVSingleCount', ],
            ],
        ],
        'DiscountDetailList' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'billPeriod' => [ 'type' => 'integer', 'locationName' => 'billPeriod', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'discount' => [ 'type' => 'double', 'locationName' => 'discount', ],
            ],
        ],
        'DownloadCertDesc' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'keyFile' => [ 'type' => 'string', 'locationName' => 'keyFile', ],
                'certFile' => [ 'type' => 'string', 'locationName' => 'certFile', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'caCertFile' => [ 'type' => 'string', 'locationName' => 'caCertFile', ],
                'serverType' => [ 'type' => 'string', 'locationName' => 'serverType', ],
                'certEncryptePassword' => [ 'type' => 'string', 'locationName' => 'certEncryptePassword', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
            ],
        ],
        'RecordDescDetail' => [
            'type' => 'structure',
            'members' => [
                'recordId' => [ 'type' => 'string', 'locationName' => 'recordId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'brand' => [ 'type' => 'string', 'locationName' => 'brand', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'domainCount' => [ 'type' => 'integer', 'locationName' => 'domainCount', ],
                'wildcardDomainCount' => [ 'type' => 'integer', 'locationName' => 'wildcardDomainCount', ],
                'certValidity' => [ 'type' => 'integer', 'locationName' => 'certValidity', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
                'canceledReason' => [ 'type' => 'string', 'locationName' => 'canceledReason', ],
                'recordValidate' => [ 'type' => 'object', 'locationName' => 'recordValidate', ],
                'corpName' => [ 'type' => 'string', 'locationName' => 'corpName', ],
                'corpAddr' => [ 'type' => 'string', 'locationName' => 'corpAddr', ],
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'errorMessage' => [ 'type' => 'string', 'locationName' => 'errorMessage', ],
            ],
        ],
        'RecordListDetail' => [
            'type' => 'structure',
            'members' => [
                'recordId' => [ 'type' => 'string', 'locationName' => 'recordId', ],
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'supplier' => [ 'type' => 'string', 'locationName' => 'supplier', ],
                'brand' => [ 'type' => 'string', 'locationName' => 'brand', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'certValidity' => [ 'type' => 'integer', 'locationName' => 'certValidity', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
                'partnerOrderId' => [ 'type' => 'string', 'locationName' => 'partnerOrderId', ],
                'domainCount' => [ 'type' => 'integer', 'locationName' => 'domainCount', ],
                'wildcardDomainCount' => [ 'type' => 'integer', 'locationName' => 'wildcardDomainCount', ],
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'DownloadCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'serverType' => [ 'type' => 'string', 'locationName' => 'serverType', ],
            ],
        ],
        'DescribeCertsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCertsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCertsResultShape' => [
            'type' => 'structure',
            'members' => [
                'certListDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertListDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'UpdateCertNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
            ],
        ],
        'UpdateCertNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateCertNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UploadCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UploadCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateCertNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'UploadCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
            ],
        ],
        'DeleteCertsResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DownloadCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'certDesc' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadCertDesc', ], ],
            ],
        ],
        'UpdateCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'keyFile' => [ 'type' => 'string', 'locationName' => 'keyFile', ],
                'certFile' => [ 'type' => 'string', 'locationName' => 'certFile', ],
            ],
        ],
        'DeleteCertsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'DownloadCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DownloadCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'DescribeCertsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'certIds' => [ 'type' => 'string', 'locationName' => 'certIds', ],
            ],
        ],
        'UpdateCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
            ],
        ],
        'DescribeCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'issuer' => [ 'type' => 'string', 'locationName' => 'issuer', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'usedBy' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertBindInfo', ], ],
            ],
        ],
        'UploadCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'keyFile' => [ 'type' => 'string', 'locationName' => 'keyFile', ],
                'certFile' => [ 'type' => 'string', 'locationName' => 'certFile', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
            ],
        ],
        'DeleteCertsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCertsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ValidateQueryResult' => [
            'type' => 'structure',
            'members' => [
                'validateKey' => [ 'type' => 'string', 'locationName' => 'validateKey', ],
                'validateValue' => [ 'type' => 'string', 'locationName' => 'validateValue', ],
            ],
        ],
    ],
];
