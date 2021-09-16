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
    ],
];
