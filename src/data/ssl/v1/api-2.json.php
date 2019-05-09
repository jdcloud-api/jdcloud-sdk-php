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
                'method' => 'GET',
                'requestUri' => '/v1/sslCert/{certId}:download',
            ],
            'input' => [ 'shape' => 'DownloadCertRequestShape', ],
            'output' => [ 'shape' => 'DownloadCertResponseShape', ],
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
                'certValidity' => [ 'type' => 'integer', 'locationName' => 'certValidity', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'state' => [ 'type' => 'integer', 'locationName' => 'state', ],
                'canceledReason' => [ 'type' => 'string', 'locationName' => 'canceledReason', ],
                'recordValidate' => [ 'type' => 'object', 'locationName' => 'recordValidate', ],
                'corpName' => [ 'type' => 'string', 'locationName' => 'corpName', ],
                'corpAddr' => [ 'type' => 'string', 'locationName' => 'corpAddr', ],
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
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
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteCertsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'DownloadCertRequestShape' => [
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
        'DescribeCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'DescribeCertsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
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
        'DeleteCertsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCertsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
