<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'cloudsign',
        'protocol' => 'json',
//        'serviceFullName' => 'cloudsign',
//        'serviceId' => 'cloudsign',
    ],
    'operations' => [
        'DescribeContractList' => [
            'name' => 'DescribeContractList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/contract',
            ],
            'input' => [ 'shape' => 'DescribeContractListRequestShape', ],
            'output' => [ 'shape' => 'DescribeContractListResponseShape', ],
        ],
        'SignContract' => [
            'name' => 'SignContract',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/contract',
            ],
            'input' => [ 'shape' => 'SignContractRequestShape', ],
            'output' => [ 'shape' => 'SignContractResponseShape', ],
        ],
        'DownloadContracts' => [
            'name' => 'DownloadContracts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/contract/{contractId}',
            ],
            'input' => [ 'shape' => 'DownloadContractsRequestShape', ],
            'output' => [ 'shape' => 'DownloadContractsResponseShape', ],
        ],
        'VerifyContract' => [
            'name' => 'VerifyContract',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/contract/{contractId}',
            ],
            'input' => [ 'shape' => 'VerifyContractRequestShape', ],
            'output' => [ 'shape' => 'VerifyContractResponseShape', ],
        ],
        'DeleteContract' => [
            'name' => 'DeleteContract',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/contract/{contractId}',
            ],
            'input' => [ 'shape' => 'DeleteContractRequestShape', ],
            'output' => [ 'shape' => 'DeleteContractResponseShape', ],
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
        'EnableContractSave' => [
            'name' => 'EnableContractSave',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/manage:enableContractSave',
            ],
            'input' => [ 'shape' => 'EnableContractSaveRequestShape', ],
            'output' => [ 'shape' => 'EnableContractSaveResponseShape', ],
        ],
        'DisableContractSave' => [
            'name' => 'DisableContractSave',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/manage:disableContractSave',
            ],
            'input' => [ 'shape' => 'DisableContractSaveRequestShape', ],
            'output' => [ 'shape' => 'DisableContractSaveResponseShape', ],
        ],
        'SetKmsKeyId' => [
            'name' => 'SetKmsKeyId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/manage:setKmsKeyId',
            ],
            'input' => [ 'shape' => 'SetKmsKeyIdRequestShape', ],
            'output' => [ 'shape' => 'SetKmsKeyIdResponseShape', ],
        ],
        'DescribeStampList' => [
            'name' => 'DescribeStampList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/stamp',
            ],
            'input' => [ 'shape' => 'DescribeStampListRequestShape', ],
            'output' => [ 'shape' => 'DescribeStampListResponseShape', ],
        ],
        'UploadStamp' => [
            'name' => 'UploadStamp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/stamp',
            ],
            'input' => [ 'shape' => 'UploadStampRequestShape', ],
            'output' => [ 'shape' => 'UploadStampResponseShape', ],
        ],
        'DownloadStamps' => [
            'name' => 'DownloadStamps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/stamp/{stampId}',
            ],
            'input' => [ 'shape' => 'DownloadStampsRequestShape', ],
            'output' => [ 'shape' => 'DownloadStampsResponseShape', ],
        ],
        'DeleteStamp' => [
            'name' => 'DeleteStamp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/stamp/{stampId}',
            ],
            'input' => [ 'shape' => 'DeleteStampRequestShape', ],
            'output' => [ 'shape' => 'DeleteStampResponseShape', ],
        ],
        'DescribeTemplateList' => [
            'name' => 'DescribeTemplateList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/template',
            ],
            'input' => [ 'shape' => 'DescribeTemplateListRequestShape', ],
            'output' => [ 'shape' => 'DescribeTemplateListResponseShape', ],
        ],
        'UploadTemplate' => [
            'name' => 'UploadTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/template',
            ],
            'input' => [ 'shape' => 'UploadTemplateRequestShape', ],
            'output' => [ 'shape' => 'UploadTemplateResponseShape', ],
        ],
        'DownloadTemplates' => [
            'name' => 'DownloadTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/template/{templateId}',
            ],
            'input' => [ 'shape' => 'DownloadTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DownloadTemplatesResponseShape', ],
        ],
        'PaddingTemplate' => [
            'name' => 'PaddingTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/template/{templateId}',
            ],
            'input' => [ 'shape' => 'PaddingTemplateRequestShape', ],
            'output' => [ 'shape' => 'PaddingTemplateResponseShape', ],
        ],
        'DeleteTemplate' => [
            'name' => 'DeleteTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/template/{templateId}',
            ],
            'input' => [ 'shape' => 'DeleteTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteTemplateResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
