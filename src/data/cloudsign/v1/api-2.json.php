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
        'ContractInfo' => [
            'type' => 'structure',
            'members' => [
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
                'contractTitle' => [ 'type' => 'string', 'locationName' => 'contractTitle', ],
                'stampNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contractContent' => [ 'type' => 'string', 'locationName' => 'contractContent', ],
                'contractDigest' => [ 'type' => 'string', 'locationName' => 'contractDigest', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ContractSpec' => [
            'type' => 'structure',
            'members' => [
                'personStamps' => [ 'type' => 'list', 'member' => [ 'shape' => 'PerStamp', ], ],
                'companyStamps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComStamp', ], ],
                'contractContent' => [ 'type' => 'string', 'locationName' => 'contractContent', ],
                'templateContent' => [ 'type' => 'string', 'locationName' => 'templateContent', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'contractTitle' => [ 'type' => 'string', 'locationName' => 'contractTitle', ],
                'caType' => [ 'type' => 'string', 'locationName' => 'caType', ],
            ],
        ],
        'VerifyInfo' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'StampResult', ], ],
            ],
        ],
        'ComStamp' => [
            'type' => 'structure',
            'members' => [
                'signPositionType' => [ 'type' => 'integer', 'locationName' => 'signPositionType', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'positionX' => [ 'type' => 'integer', 'locationName' => 'positionX', ],
                'positionY' => [ 'type' => 'integer', 'locationName' => 'positionY', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'sealName' => [ 'type' => 'string', 'locationName' => 'sealName', ],
                'imageB64' => [ 'type' => 'string', 'locationName' => 'imageB64', ],
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageSize' => [ 'type' => 'integer', 'locationName' => 'imageSize', ],
                'imageHeight' => [ 'type' => 'integer', 'locationName' => 'imageHeight', ],
                'imageWidth' => [ 'type' => 'integer', 'locationName' => 'imageWidth', ],
                'orgName' => [ 'type' => 'string', 'locationName' => 'orgName', ],
                'legalPersonName' => [ 'type' => 'string', 'locationName' => 'legalPersonName', ],
                'transactorName' => [ 'type' => 'string', 'locationName' => 'transactorName', ],
                'transactorIdCardNum' => [ 'type' => 'string', 'locationName' => 'transactorIdCardNum', ],
                'transactorMobile' => [ 'type' => 'string', 'locationName' => 'transactorMobile', ],
                'identifyType' => [ 'type' => 'string', 'locationName' => 'identifyType', ],
                'identifyValue' => [ 'type' => 'string', 'locationName' => 'identifyValue', ],
            ],
        ],
        'ContractVerifySpec' => [
            'type' => 'structure',
            'members' => [
                'contractContent' => [ 'type' => 'string', 'locationName' => 'contractContent', ],
                'checkCertChain' => [ 'type' => 'boolean', 'locationName' => 'checkCertChain', ],
            ],
        ],
        'PerStamp' => [
            'type' => 'structure',
            'members' => [
                'signPositionType' => [ 'type' => 'integer', 'locationName' => 'signPositionType', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'positionX' => [ 'type' => 'integer', 'locationName' => 'positionX', ],
                'positionY' => [ 'type' => 'integer', 'locationName' => 'positionY', ],
                'offsetX' => [ 'type' => 'integer', 'locationName' => 'offsetX', ],
                'offsetY' => [ 'type' => 'integer', 'locationName' => 'offsetY', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'sealName' => [ 'type' => 'string', 'locationName' => 'sealName', ],
                'imageB64' => [ 'type' => 'string', 'locationName' => 'imageB64', ],
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'isDefault' => [ 'type' => 'boolean', 'locationName' => 'isDefault', ],
                'imageType' => [ 'type' => 'string', 'locationName' => 'imageType', ],
                'imageSize' => [ 'type' => 'integer', 'locationName' => 'imageSize', ],
                'imageHeight' => [ 'type' => 'integer', 'locationName' => 'imageHeight', ],
                'imageWidth' => [ 'type' => 'integer', 'locationName' => 'imageWidth', ],
                'personalName' => [ 'type' => 'string', 'locationName' => 'personalName', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'identifyType' => [ 'type' => 'string', 'locationName' => 'identifyType', ],
                'identifyValue' => [ 'type' => 'string', 'locationName' => 'identifyValue', ],
            ],
        ],
        'StampInfo' => [
            'type' => 'structure',
            'members' => [
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
                'stampName' => [ 'type' => 'string', 'locationName' => 'stampName', ],
                'stampContent' => [ 'type' => 'string', 'locationName' => 'stampContent', ],
                'stampDigest' => [ 'type' => 'string', 'locationName' => 'stampDigest', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'StampSpec' => [
            'type' => 'structure',
            'members' => [
                'stampContent' => [ 'type' => 'string', 'locationName' => 'stampContent', ],
                'stampName' => [ 'type' => 'string', 'locationName' => 'stampName', ],
            ],
        ],
        'SignItem' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'StatisticsInfo' => [
            'type' => 'structure',
            'members' => [
                'contractNumber' => [ 'type' => 'integer', 'locationName' => 'contractNumber', ],
                'stampNumber' => [ 'type' => 'integer', 'locationName' => 'stampNumber', ],
                'templateNumber' => [ 'type' => 'integer', 'locationName' => 'templateNumber', ],
                'contractSave' => [ 'type' => 'boolean', 'locationName' => 'contractSave', ],
                'usedSpace' => [ 'type' => 'integer', 'locationName' => 'usedSpace', ],
                'kmsKeyId' => [ 'type' => 'string', 'locationName' => 'kmsKeyId', ],
                'signStatistic' => [ 'type' => 'list', 'member' => [ 'shape' => 'SignItem', ], ],
            ],
        ],
        'TemplateInfo' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateTitle' => [ 'type' => 'string', 'locationName' => 'templateTitle', ],
                'templateFileName' => [ 'type' => 'string', 'locationName' => 'templateFileName', ],
                'templateContent' => [ 'type' => 'string', 'locationName' => 'templateContent', ],
                'templateDigest' => [ 'type' => 'string', 'locationName' => 'templateDigest', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'TemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'templateContent' => [ 'type' => 'string', 'locationName' => 'templateContent', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateTitle' => [ 'type' => 'string', 'locationName' => 'templateTitle', ],
            ],
        ],
        'DeleteContractResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DownloadContractsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadContractsResultShape', ], ],
            ],
        ],
        'DeleteContractRequestShape' => [
            'type' => 'structure',
            'members' => [
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
            ],
        ],
        'SignContractRequestShape' => [
            'type' => 'structure',
            'members' => [
                'contractSpec' =>  [ 'shape' => 'ContractSpec', ],
            ],
        ],
        'SignContractResultShape' => [
            'type' => 'structure',
            'members' => [
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
                'contractContent' => [ 'type' => 'string', 'locationName' => 'contractContent', ],
            ],
        ],
        'VerifyContractResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'VerifyContractResultShape', ],
            ],
        ],
        'StampResult' => [
            'type' => 'structure',
            'members' => [
                'verified' => [ 'type' => 'boolean', 'locationName' => 'verified', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'certInfo' => [ 'type' => 'string', 'locationName' => 'certInfo', ],
                'chainRootVerified' => [ 'type' => 'boolean', 'locationName' => 'chainRootVerified', ],
                'subType' => [ 'type' => 'string', 'locationName' => 'subType', ],
            ],
        ],
        'SignContractResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SignContractResultShape', ],
            ],
        ],
        'DescribeContractListResultShape' => [
            'type' => 'structure',
            'members' => [
                'contractList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContractInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'VerifyContractRequestShape' => [
            'type' => 'structure',
            'members' => [
                'contractVerifySpec' =>  [ 'shape' => 'ContractVerifySpec', ],
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
            ],
        ],
        'DescribeContractListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'contractTitle' => [ 'type' => 'string', 'locationName' => 'contractTitle', ],
            ],
        ],
        'DeleteContractResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'VerifyContractResultShape' => [
            'type' => 'structure',
            'members' => [
                'verifyInfo' =>  [ 'shape' => 'VerifyInfo', ],
            ],
        ],
        'DescribeContractListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeContractListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DownloadContractsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
            ],
        ],
        'DownloadContractsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetKmsKeyIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeApplyStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableContractSaveResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableContractSaveResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeApplyStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeApplyStatusResultShape', ],
            ],
        ],
        'DisableContractSaveRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableContractSaveRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableContractSaveResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetKmsKeyIdResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeApplyStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'usedCapacity' => [ 'type' => 'integer', 'locationName' => 'usedCapacity', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'contractSaving' => [ 'type' => 'boolean', 'locationName' => 'contractSaving', ],
                'kmsKeyId' => [ 'type' => 'string', 'locationName' => 'kmsKeyId', ],
                'applyTime' => [ 'type' => 'string', 'locationName' => 'applyTime', ],
            ],
        ],
        'SetKmsKeyIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyId' => [ 'type' => 'string', 'locationName' => 'keyId', ],
            ],
        ],
        'EnableContractSaveResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DownloadStampsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DownloadStampsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadStampsResultShape', ], ],
            ],
        ],
        'UploadStampRequestShape' => [
            'type' => 'structure',
            'members' => [
                'stampSpec' =>  [ 'shape' => 'StampSpec', ],
            ],
        ],
        'DeleteStampResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DownloadStampsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
            ],
        ],
        'DeleteStampRequestShape' => [
            'type' => 'structure',
            'members' => [
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
            ],
        ],
        'UploadStampResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UploadStampResultShape', ],
            ],
        ],
        'DescribeStampListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeStampListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeStampListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'stampName' => [ 'type' => 'string', 'locationName' => 'stampName', ],
            ],
        ],
        'UploadStampResultShape' => [
            'type' => 'structure',
            'members' => [
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
            ],
        ],
        'DescribeStampListResultShape' => [
            'type' => 'structure',
            'members' => [
                'stampList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StampInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteStampResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTemplateListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'templateNameOrTitle' => [ 'type' => 'string', 'locationName' => 'templateNameOrTitle', ],
            ],
        ],
        'UploadTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DownloadTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DownloadTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadTemplatesResultShape', ], ],
            ],
        ],
        'UploadTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateSpec' =>  [ 'shape' => 'TemplateSpec', ],
            ],
        ],
        'DescribeTemplateListResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DownloadTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'DeleteTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTemplateListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTemplateListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UploadTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UploadTemplateResultShape', ],
            ],
        ],
    ],
];
