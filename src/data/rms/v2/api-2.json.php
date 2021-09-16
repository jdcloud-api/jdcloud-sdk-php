<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'rms',
        'protocol' => 'json',
//        'serviceFullName' => 'rms',
//        'serviceId' => 'rms',
    ],
    'operations' => [
        'AddCredit' => [
            'name' => 'AddCredit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/addCredit',
            ],
            'input' => [ 'shape' => 'AddCreditRequestShape', ],
            'output' => [ 'shape' => 'AddCreditResponseShape', ],
        ],
        'EditCredit' => [
            'name' => 'EditCredit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/editCredit',
            ],
            'input' => [ 'shape' => 'EditCreditRequestShape', ],
            'output' => [ 'shape' => 'EditCreditResponseShape', ],
        ],
        'DeleteCredit' => [
            'name' => 'DeleteCredit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/deleteCredit',
            ],
            'input' => [ 'shape' => 'DeleteCreditRequestShape', ],
            'output' => [ 'shape' => 'DeleteCreditResponseShape', ],
        ],
        'QueryCreditList' => [
            'name' => 'QueryCreditList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/queryCreditList',
            ],
            'input' => [ 'shape' => 'QueryCreditListRequestShape', ],
            'output' => [ 'shape' => 'QueryCreditListResponseShape', ],
        ],
        'QueryPackageRemainder' => [
            'name' => 'QueryPackageRemainder',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/queryPackageRemainder',
            ],
            'input' => [ 'shape' => 'QueryPackageRemainderRequestShape', ],
            'output' => [ 'shape' => 'QueryPackageRemainderResponseShape', ],
        ],
        'SendBatchMsg' => [
            'name' => 'SendBatchMsg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/sendBatchMsg',
            ],
            'input' => [ 'shape' => 'SendBatchMsgRequestShape', ],
            'output' => [ 'shape' => 'SendBatchMsgResponseShape', ],
        ],
        'QuerySendStatus' => [
            'name' => 'QuerySendStatus',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/querySendStatus',
            ],
            'input' => [ 'shape' => 'QuerySendStatusRequestShape', ],
            'output' => [ 'shape' => 'QuerySendStatusResponseShape', ],
        ],
        'AddTemplateNew' => [
            'name' => 'AddTemplateNew',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/addTemplateNew',
            ],
            'input' => [ 'shape' => 'AddTemplateNewRequestShape', ],
            'output' => [ 'shape' => 'AddTemplateNewResponseShape', ],
        ],
        'EditTemplate' => [
            'name' => 'EditTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/editTemplate',
            ],
            'input' => [ 'shape' => 'EditTemplateRequestShape', ],
            'output' => [ 'shape' => 'EditTemplateResponseShape', ],
        ],
        'DeleteTemplate' => [
            'name' => 'DeleteTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/deleteTemplate',
            ],
            'input' => [ 'shape' => 'DeleteTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteTemplateResponseShape', ],
        ],
        'QueryTemplateById' => [
            'name' => 'QueryTemplateById',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/queryTemplateById',
            ],
            'input' => [ 'shape' => 'QueryTemplateByIdRequestShape', ],
            'output' => [ 'shape' => 'QueryTemplateByIdResponseShape', ],
        ],
        'QueryTemplateList' => [
            'name' => 'QueryTemplateList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/queryTemplateList',
            ],
            'input' => [ 'shape' => 'QueryTemplateListRequestShape', ],
            'output' => [ 'shape' => 'QueryTemplateListResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
