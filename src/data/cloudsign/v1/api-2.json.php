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
        'DescribeContractList' => [
            'name' => 'DescribeContractList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smqContract:describeContractList',
            ],
            'input' => [ 'shape' => 'DescribeContractListRequestShape', ],
            'output' => [ 'shape' => 'DescribeContractListResponseShape', ],
        ],
        'SignContract' => [
            'name' => 'SignContract',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smqContract:signContract',
            ],
            'input' => [ 'shape' => 'SignContractRequestShape', ],
            'output' => [ 'shape' => 'SignContractResponseShape', ],
        ],
        'VerifyContract' => [
            'name' => 'VerifyContract',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smqContract/{contractId}:verifyContract',
            ],
            'input' => [ 'shape' => 'VerifyContractRequestShape', ],
            'output' => [ 'shape' => 'VerifyContractResponseShape', ],
        ],
        'DownloadContracts' => [
            'name' => 'DownloadContracts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smqContract/{contractId}:downloadContracts',
            ],
            'input' => [ 'shape' => 'DownloadContractsRequestShape', ],
            'output' => [ 'shape' => 'DownloadContractsResponseShape', ],
        ],
        'DeleteContract' => [
            'name' => 'DeleteContract',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/smqContract/{contractId}:deleteContract',
            ],
            'input' => [ 'shape' => 'DeleteContractRequestShape', ],
            'output' => [ 'shape' => 'DeleteContractResponseShape', ],
        ],
        'SaveEvidence' => [
            'name' => 'SaveEvidence',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/evidence:evidenceSave',
            ],
            'input' => [ 'shape' => 'SaveEvidenceRequestShape', ],
            'output' => [ 'shape' => 'SaveEvidenceResponseShape', ],
        ],
        'SaveMultiEvidence' => [
            'name' => 'SaveMultiEvidence',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/evidence:evidenceMultisave',
            ],
            'input' => [ 'shape' => 'SaveMultiEvidenceRequestShape', ],
            'output' => [ 'shape' => 'SaveMultiEvidenceResponseShape', ],
        ],
        'GetEvidence' => [
            'name' => 'GetEvidence',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/evidence:evidenceGetEvidence',
            ],
            'input' => [ 'shape' => 'GetEvidenceRequestShape', ],
            'output' => [ 'shape' => 'GetEvidenceResponseShape', ],
        ],
        'GetMultiEvidence' => [
            'name' => 'GetMultiEvidence',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/evidence:evidenceGetmulti',
            ],
            'input' => [ 'shape' => 'GetMultiEvidenceRequestShape', ],
            'output' => [ 'shape' => 'GetMultiEvidenceResponseShape', ],
        ],
        'GetSaveReport' => [
            'name' => 'GetSaveReport',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/evidence:evidenceGetSaveReport',
            ],
            'input' => [ 'shape' => 'GetSaveReportRequestShape', ],
            'output' => [ 'shape' => 'GetSaveReportResponseShape', ],
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
                'requestUri' => '/v1/smqStamp:describeStampList',
            ],
            'input' => [ 'shape' => 'DescribeStampListRequestShape', ],
            'output' => [ 'shape' => 'DescribeStampListResponseShape', ],
        ],
        'UploadStamp' => [
            'name' => 'UploadStamp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smqStamp:uploadStamp',
            ],
            'input' => [ 'shape' => 'UploadStampRequestShape', ],
            'output' => [ 'shape' => 'UploadStampResponseShape', ],
        ],
        'DownloadStamps' => [
            'name' => 'DownloadStamps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smqStamp/{stampId}:downloadStamps',
            ],
            'input' => [ 'shape' => 'DownloadStampsRequestShape', ],
            'output' => [ 'shape' => 'DownloadStampsResponseShape', ],
        ],
        'DeleteStamp' => [
            'name' => 'DeleteStamp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/smqStamp/{stampId}:deleteStamp',
            ],
            'input' => [ 'shape' => 'DeleteStampRequestShape', ],
            'output' => [ 'shape' => 'DeleteStampResponseShape', ],
        ],
        'EditStamp' => [
            'name' => 'EditStamp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smqStamp:editStamp',
            ],
            'input' => [ 'shape' => 'EditStampRequestShape', ],
            'output' => [ 'shape' => 'EditStampResponseShape', ],
        ],
        'DescribeStampHistoryList' => [
            'name' => 'DescribeStampHistoryList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smqStamphistory:describeStampHistoryList',
            ],
            'input' => [ 'shape' => 'DescribeStampHistoryListRequestShape', ],
            'output' => [ 'shape' => 'DescribeStampHistoryListResponseShape', ],
        ],
        'DescribeTemplateList' => [
            'name' => 'DescribeTemplateList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smqTemplate:describeTemplateList',
            ],
            'input' => [ 'shape' => 'DescribeTemplateListRequestShape', ],
            'output' => [ 'shape' => 'DescribeTemplateListResponseShape', ],
        ],
        'UploadTemplate' => [
            'name' => 'UploadTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smqTemplate:uploadTemplate',
            ],
            'input' => [ 'shape' => 'UploadTemplateRequestShape', ],
            'output' => [ 'shape' => 'UploadTemplateResponseShape', ],
        ],
        'DownloadTemplates' => [
            'name' => 'DownloadTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smqTemplate/{templateId}:downloadTemplates',
            ],
            'input' => [ 'shape' => 'DownloadTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DownloadTemplatesResponseShape', ],
        ],
        'DeleteTemplate' => [
            'name' => 'DeleteTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/smqTemplate/{templateId}:deleteTemplate',
            ],
            'input' => [ 'shape' => 'DeleteTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeleteTemplateResponseShape', ],
        ],
        'PaddingTemplate' => [
            'name' => 'PaddingTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/smqTemplate/{templateId}:paddingTemplate',
            ],
            'input' => [ 'shape' => 'PaddingTemplateRequestShape', ],
            'output' => [ 'shape' => 'PaddingTemplateResponseShape', ],
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
        'PageAgentSpec' => [
            'type' => 'structure',
            'members' => [
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentPhone' => [ 'type' => 'string', 'locationName' => 'agentPhone', ],
                'agentIdCardNum' => [ 'type' => 'string', 'locationName' => 'agentIdCardNum', ],
            ],
        ],
        'DetailAgentInfo' => [
            'type' => 'structure',
            'members' => [
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentPhone' => [ 'type' => 'string', 'locationName' => 'agentPhone', ],
                'agentIdCardNum' => [ 'type' => 'string', 'locationName' => 'agentIdCardNum', ],
                'agentFileName' => [ 'type' => 'string', 'locationName' => 'agentFileName', ],
                'agentPageInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'PdfPageInfo', ], ],
            ],
        ],
        'PdfPageInfo' => [
            'type' => 'structure',
            'members' => [
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'imgBase64' => [ 'type' => 'string', 'locationName' => 'imgBase64', ],
            ],
        ],
        'AgentSpec' => [
            'type' => 'structure',
            'members' => [
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentIdcardNum' => [ 'type' => 'string', 'locationName' => 'agentIdcardNum', ],
                'agentPhone' => [ 'type' => 'string', 'locationName' => 'agentPhone', ],
                'agentAuthFile' => [ 'type' => 'string', 'locationName' => 'agentAuthFile', ],
                'agentFileName' => [ 'type' => 'string', 'locationName' => 'agentFileName', ],
            ],
        ],
        'EditAgentSpec' => [
            'type' => 'structure',
            'members' => [
                'agentId' => [ 'type' => 'string', 'locationName' => 'agentId', ],
                'agentAuthFile' => [ 'type' => 'string', 'locationName' => 'agentAuthFile', ],
            ],
        ],
        'AgentInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'agentName' => [ 'type' => 'string', 'locationName' => 'agentName', ],
                'agentPhone' => [ 'type' => 'string', 'locationName' => 'agentPhone', ],
                'agentIdCardNum' => [ 'type' => 'string', 'locationName' => 'agentIdCardNum', ],
                'agentFileName' => [ 'type' => 'string', 'locationName' => 'agentFileName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'note' => [ 'type' => 'string', 'locationName' => 'note', ],
            ],
        ],
        'PageAgentResp' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgentInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ContractInfo' => [
            'type' => 'structure',
            'members' => [
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
                'contractTitle' => [ 'type' => 'string', 'locationName' => 'contractTitle', ],
                'stampNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contractContent' => [ 'type' => 'string', 'locationName' => 'contractContent', ],
                'contractDigest' => [ 'type' => 'string', 'locationName' => 'contractDigest', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
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
                'stampStyle' => [ 'type' => 'string', 'locationName' => 'stampStyle', ],
                'certExpire' => [ 'type' => 'integer', 'locationName' => 'certExpire', ],
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'needStorage' => [ 'type' => 'boolean', 'locationName' => 'needStorage', ],
                'needContract' => [ 'type' => 'boolean', 'locationName' => 'needContract', ],
                'dept' => [ 'type' => 'string', 'locationName' => 'dept', ],
                'pageRange' => [ 'type' => 'string', 'locationName' => 'pageRange', ],
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
                'stampMax' => [ 'type' => 'integer', 'locationName' => 'stampMax', ],
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
                'stampStyle' => [ 'type' => 'string', 'locationName' => 'stampStyle', ],
                'certExpire' => [ 'type' => 'integer', 'locationName' => 'certExpire', ],
                'pageRange' => [ 'type' => 'string', 'locationName' => 'pageRange', ],
                'positionPoint' => [ 'type' => 'string', 'locationName' => 'positionPoint', ],
                'keywordCenter' => [ 'type' => 'boolean', 'locationName' => 'keywordCenter', ],
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
                'stampMax' => [ 'type' => 'integer', 'locationName' => 'stampMax', ],
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
                'stampStyle' => [ 'type' => 'string', 'locationName' => 'stampStyle', ],
                'certExpire' => [ 'type' => 'integer', 'locationName' => 'certExpire', ],
                'pageRange' => [ 'type' => 'string', 'locationName' => 'pageRange', ],
                'positionPoint' => [ 'type' => 'string', 'locationName' => 'positionPoint', ],
                'keywordCenter' => [ 'type' => 'boolean', 'locationName' => 'keywordCenter', ],
            ],
        ],
        'SignUserContractStatus' => [
            'type' => 'structure',
            'members' => [
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'statusDescription' => [ 'type' => 'string', 'locationName' => 'statusDescription', ],
            ],
        ],
        'DownloadContractInfo' => [
            'type' => 'structure',
            'members' => [
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
                'contractName' => [ 'type' => 'string', 'locationName' => 'contractName', ],
                'contractContent' => [ 'type' => 'string', 'locationName' => 'contractContent', ],
                'contractDigest' => [ 'type' => 'string', 'locationName' => 'contractDigest', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'PdfViewInfo' => [
            'type' => 'structure',
            'members' => [
                'pdfBase64' => [ 'type' => 'string', 'locationName' => 'pdfBase64', ],
                'numberOfPages' => [ 'type' => 'integer', 'locationName' => 'numberOfPages', ],
                'pageInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'PdfPageInfo', ], ],
            ],
        ],
        'SignatureInfo' => [
            'type' => 'structure',
            'members' => [
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
                'positionX' => [ 'type' => 'integer', 'locationName' => 'positionX', ],
                'positionY' => [ 'type' => 'integer', 'locationName' => 'positionY', ],
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
            ],
        ],
        'ReadySignContractResp' => [
            'type' => 'structure',
            'members' => [
                'keywordInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeywordInfo', ], ],
                'pageInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'PdfPageInfo', ], ],
                'signStamps' => [ 'type' => 'list', 'member' => [ 'shape' => 'SignStampInfo', ], ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'certificationAgreement' => [ 'type' => 'string', 'locationName' => 'certificationAgreement', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'senderName' => [ 'type' => 'string', 'locationName' => 'senderName', ],
                'signingName' => [ 'type' => 'string', 'locationName' => 'signingName', ],
                'signPositionType' => [ 'type' => 'integer', 'locationName' => 'signPositionType', ],
                'hash' => [ 'type' => 'string', 'locationName' => 'hash', ],
            ],
        ],
        'PageSignContractInfo' => [
            'type' => 'structure',
            'members' => [
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
                'contractRecordId' => [ 'type' => 'string', 'locationName' => 'contractRecordId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileSize' => [ 'type' => 'string', 'locationName' => 'fileSize', ],
                'contractNo' => [ 'type' => 'string', 'locationName' => 'contractNo', ],
                'contractNoSub' => [ 'type' => 'string', 'locationName' => 'contractNoSub', ],
                'orderSign' => [ 'type' => 'integer', 'locationName' => 'orderSign', ],
                'orderSignDescription' => [ 'type' => 'string', 'locationName' => 'orderSignDescription', ],
                'note' => [ 'type' => 'string', 'locationName' => 'note', ],
                'senderName' => [ 'type' => 'string', 'locationName' => 'senderName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'statusDescription' => [ 'type' => 'string', 'locationName' => 'statusDescription', ],
                'signUserList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SignUserContractStatus', ], ],
                'rejectUserId' => [ 'type' => 'string', 'locationName' => 'rejectUserId', ],
                'rejectUserName' => [ 'type' => 'string', 'locationName' => 'rejectUserName', ],
                'signPositionType' => [ 'type' => 'integer', 'locationName' => 'signPositionType', ],
                'signPositionTypeDescription' => [ 'type' => 'string', 'locationName' => 'signPositionTypeDescription', ],
            ],
        ],
        'CreateContractSpec' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'users' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserInfo', ], ],
                'signPositionType' => [ 'type' => 'integer', 'locationName' => 'signPositionType', ],
                'orderSign' => [ 'type' => 'integer', 'locationName' => 'orderSign', ],
                'contractBase64' => [ 'type' => 'string', 'locationName' => 'contractBase64', ],
                'contractNo' => [ 'type' => 'string', 'locationName' => 'contractNo', ],
                'contractNoSub' => [ 'type' => 'string', 'locationName' => 'contractNoSub', ],
                'note' => [ 'type' => 'string', 'locationName' => 'note', ],
                'ownerCloudUserId' => [ 'type' => 'string', 'locationName' => 'ownerCloudUserId', ],
            ],
        ],
        'DownloadContractResp' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'contractList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadContractInfo', ], ],
            ],
        ],
        'HistoryContractInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'statusDescription' => [ 'type' => 'string', 'locationName' => 'statusDescription', ],
                'contractId' => [ 'type' => 'string', 'locationName' => 'contractId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'PreviewAndHistoryResp' => [
            'type' => 'structure',
            'members' => [
                'historyInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'HistoryContractInfo', ], ],
                'names' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pdfViewInfo' =>  [ 'shape' => 'PdfViewInfo', ],
            ],
        ],
        'UserInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'idCardNum' => [ 'type' => 'string', 'locationName' => 'idCardNum', ],
                'signOrder' => [ 'type' => 'integer', 'locationName' => 'signOrder', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
            ],
        ],
        'KeywordInfo' => [
            'type' => 'structure',
            'members' => [
                'signer' => [ 'type' => 'string', 'locationName' => 'signer', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
            ],
        ],
        'SignContractSpec' => [
            'type' => 'structure',
            'members' => [
                'contractRecordId' => [ 'type' => 'string', 'locationName' => 'contractRecordId', ],
                'smsCode' => [ 'type' => 'string', 'locationName' => 'smsCode', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
                'hash' => [ 'type' => 'string', 'locationName' => 'hash', ],
                'signatures' => [ 'type' => 'list', 'member' => [ 'shape' => 'SignatureInfo', ], ],
            ],
        ],
        'SignStampInfo' => [
            'type' => 'structure',
            'members' => [
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
                'stampName' => [ 'type' => 'string', 'locationName' => 'stampName', ],
                'stampUrl' => [ 'type' => 'string', 'locationName' => 'stampUrl', ],
            ],
        ],
        'PageContractResp' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'PageSignContractInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'CountByPeriodResp' => [
            'type' => 'structure',
            'members' => [
                'get' => [ 'type' => '类型是map&lt;String, int&gt;, 意思是map&lt;时间, 数量&gt;。如果是1，时间为“2022-09-21 18:00:00”；如果是7、30，时间为“2022-09-21”', 'locationName' => 'get', ],
                'put' => [ 'type' => '同上', 'locationName' => 'put', ],
                'getReport' => [ 'type' => '同上', 'locationName' => 'getReport', ],
            ],
        ],
        'GetCountResp' => [
            'type' => 'structure',
            'members' => [
                'totalNumber' => [ 'type' => 'integer', 'locationName' => 'totalNumber', ],
                'getNumber' => [ 'type' => 'integer', 'locationName' => 'getNumber', ],
                'putNumber' => [ 'type' => 'integer', 'locationName' => 'putNumber', ],
                'czReportNumber' => [ 'type' => 'integer', 'locationName' => 'czReportNumber', ],
                'totalTodayNumber' => [ 'type' => 'integer', 'locationName' => 'totalTodayNumber', ],
                'czReportTodayNumber' => [ 'type' => 'integer', 'locationName' => 'czReportTodayNumber', ],
                'putTodayNumber' => [ 'type' => 'integer', 'locationName' => 'putTodayNumber', ],
                'getTodayNumber' => [ 'type' => 'integer', 'locationName' => 'getTodayNumber', ],
                'totalYesterdayNumber' => [ 'type' => 'integer', 'locationName' => 'totalYesterdayNumber', ],
                'putYesterdayNumber' => [ 'type' => 'integer', 'locationName' => 'putYesterdayNumber', ],
                'czReportYesterdayNumber' => [ 'type' => 'integer', 'locationName' => 'czReportYesterdayNumber', ],
                'getYesterdayNumber' => [ 'type' => 'integer', 'locationName' => 'getYesterdayNumber', ],
            ],
        ],
        'RecordListResp' => [
            'type' => 'structure',
            'members' => [
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'last' => [ 'type' => 'boolean', 'locationName' => 'last', ],
                'numberOfElements' => [ 'type' => 'integer', 'locationName' => 'numberOfElements', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'first' => [ 'type' => 'boolean', 'locationName' => 'first', ],
                'empty' => [ 'type' => 'boolean', 'locationName' => 'empty', ],
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'content' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'UserTypeResp' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'AuditStaticsResp' => [
            'type' => 'structure',
            'members' => [
                'get' => [ 'type' => 'string', 'locationName' => 'get', ],
                'put' => [ 'type' => 'string', 'locationName' => 'put', ],
                'total' => [ 'type' => 'string', 'locationName' => 'total', ],
            ],
        ],
        'UserResp' => [
            'type' => 'structure',
            'members' => [
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'last' => [ 'type' => 'boolean', 'locationName' => 'last', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'numberOfElements' => [ 'type' => 'integer', 'locationName' => 'numberOfElements', ],
                'first' => [ 'type' => 'boolean', 'locationName' => 'first', ],
                'pageable' => [ 'type' => 'string', 'locationName' => 'pageable', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'content' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'AuditResp' => [
            'type' => 'structure',
            'members' => [
                'totalElements' => [ 'type' => 'integer', 'locationName' => 'totalElements', ],
                'totalPages' => [ 'type' => 'integer', 'locationName' => 'totalPages', ],
                'last' => [ 'type' => 'boolean', 'locationName' => 'last', ],
                'number' => [ 'type' => 'integer', 'locationName' => 'number', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'numberOfElements' => [ 'type' => 'integer', 'locationName' => 'numberOfElements', ],
                'first' => [ 'type' => 'boolean', 'locationName' => 'first', ],
                'pageable' => [ 'type' => 'string', 'locationName' => 'pageable', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'content' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'SaveEvidenceResp' => [
            'type' => 'structure',
            'members' => [
                'evidenceId' => [ 'type' => 'string', 'locationName' => 'evidenceId', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
            ],
        ],
        'EvidenceFile' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'fileContent' => [ 'type' => 'base64', 'locationName' => 'fileContent', ],
            ],
        ],
        'GetEvidenceResp' => [
            'type' => 'structure',
            'members' => [
                'evidenceId' => [ 'type' => 'string', 'locationName' => 'evidenceId', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'evidenceMessageId' => [ 'type' => 'string', 'locationName' => 'evidenceMessageId', ],
                'evidenceFileList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EvidenceFile', ], ],
            ],
        ],
        'SmsSpec' => [
            'type' => 'structure',
            'members' => [
                'contractRecordId' => [ 'type' => 'string', 'locationName' => 'contractRecordId', ],
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
                'stampUrl' => [ 'type' => 'string', 'locationName' => 'stampUrl', ],
                'stampAttributes' => [ 'type' => 'string', 'locationName' => 'stampAttributes', ],
            ],
        ],
        'StampHistoryInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'createdBy' => [ 'type' => 'string', 'locationName' => 'createdBy', ],
                'operatorPhone' => [ 'type' => 'string', 'locationName' => 'operatorPhone', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'operatorType' => [ 'type' => 'string', 'locationName' => 'operatorType', ],
                'note' => [ 'type' => 'string', 'locationName' => 'note', ],
            ],
        ],
        'EidtStampSpec' => [
            'type' => 'structure',
            'members' => [
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
                'stampName' => [ 'type' => 'string', 'locationName' => 'stampName', ],
            ],
        ],
        'StampSpec' => [
            'type' => 'structure',
            'members' => [
                'stampContent' => [ 'type' => 'string', 'locationName' => 'stampContent', ],
                'stampName' => [ 'type' => 'string', 'locationName' => 'stampName', ],
                'note' => [ 'type' => 'string', 'locationName' => 'note', ],
            ],
        ],
        'PageStampHistoryResp' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'StampHistoryInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
        'SmqStatisticsInfo' => [
            'type' => 'structure',
            'members' => [
                'pageSign' => [ 'type' => 'string', 'locationName' => 'pageSign', ],
                'apiSign' => [ 'type' => 'string', 'locationName' => 'apiSign', ],
            ],
        ],
        'PaddingInfo' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'page' => [ 'type' => 'integer', 'locationName' => 'page', ],
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
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'paddingInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'PaddingInfo', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'PaddingSpec' => [
            'type' => 'structure',
            'members' => [
                'paddingInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'PaddingInfo', ], ],
            ],
        ],
        'TemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'templateContent' => [ 'type' => 'string', 'locationName' => 'templateContent', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateTitle' => [ 'type' => 'string', 'locationName' => 'templateTitle', ],
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
                'note' => [ 'type' => 'string', 'locationName' => 'note', ],
                'holdingKeys' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserCenterInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idCardNum' => [ 'type' => 'string', 'locationName' => 'idCardNum', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
            ],
        ],
        'UserCenterSmsCodeSpec' => [
            'type' => 'structure',
            'members' => [
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
            ],
        ],
        'UserCenterInfoSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'idCardNum' => [ 'type' => 'string', 'locationName' => 'idCardNum', ],
                'smsCode' => [ 'type' => 'string', 'locationName' => 'smsCode', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
            ],
        ],
        'AuthorizedUserInfo' => [
            'type' => 'structure',
            'members' => [
                'cloudUserId' => [ 'type' => 'string', 'locationName' => 'cloudUserId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'CreateOrderInfo' => [
            'type' => 'structure',
            'members' => [
                'pageSignBuyId' => [ 'type' => 'string', 'locationName' => 'pageSignBuyId', ],
                'apiSignBuyId' => [ 'type' => 'string', 'locationName' => 'apiSignBuyId', ],
                'storageBuyId' => [ 'type' => 'string', 'locationName' => 'storageBuyId', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
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
                'result' =>  [ 'shape' => 'DownloadContractsResultShape', ],
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
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'results' => [ 'type' => 'list', 'member' => [ 'shape' => 'StampResult', ], ],
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
                'contractList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContractInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetMultiEvidenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetMultiEvidenceResultShape', ],
            ],
        ],
        'SaveMultiEvidenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'data' =>  [ 'shape' => 'SaveEvidenceResp', ],
            ],
        ],
        'SaveMultiEvidenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SaveMultiEvidenceResultShape', ],
            ],
        ],
        'GetSaveReportRequestShape' => [
            'type' => 'structure',
            'members' => [
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'chainCode' => [ 'type' => 'string', 'locationName' => 'chainCode', ],
            ],
        ],
        'SaveEvidenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'file' => [ 'type' => 'string', 'locationName' => 'file', ],
            ],
        ],
        'GetEvidenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'evidenceId' => [ 'type' => 'string', 'locationName' => 'evidenceId', ],
            ],
        ],
        'GetEvidenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'data' =>  [ 'shape' => 'GetEvidenceResp', ],
            ],
        ],
        'SaveEvidenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SaveEvidenceResultShape', ],
            ],
        ],
        'GetEvidenceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetEvidenceResultShape', ],
            ],
        ],
        'GetSaveReportResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSaveReportResultShape', ],
            ],
        ],
        'GetSaveReportResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'data' =>  [ 'shape' => 'EvidenceFile', ],
            ],
        ],
        'SaveMultiEvidenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'file' => [ 'type' => 'string', 'locationName' => 'file', ],
                'businessCode' => [ 'type' => 'string', 'locationName' => 'businessCode', ],
                'lender' => [ 'type' => 'string', 'locationName' => 'lender', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'evidenceType' => [ 'type' => 'string', 'locationName' => 'evidenceType', ],
                'messageDate' => [ 'type' => 'yyyy-MM-dd HH:mm:ss', 'locationName' => 'messageDate', ],
            ],
        ],
        'GetMultiEvidenceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'businessId' => [ 'type' => 'string', 'locationName' => 'businessId', ],
                'evidenceId' => [ 'type' => 'string', 'locationName' => 'evidenceId', ],
                'applicantIdType' => [ 'type' => 'string', 'locationName' => 'applicantIdType', ],
                'applicantIdNum' => [ 'type' => 'string', 'locationName' => 'applicantIdNum', ],
                'messageId' => [ 'type' => 'string', 'locationName' => 'messageId', ],
                'evidenceType' => [ 'type' => 'string', 'locationName' => 'evidenceType', ],
                'messageDate' => [ 'type' => 'yyyy-MM-dd HH:mm:ss', 'locationName' => 'messageDate', ],
                'evidenceMessageId' => [ 'type' => 'string', 'locationName' => 'evidenceMessageId', ],
            ],
        ],
        'GetMultiEvidenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'data' =>  [ 'shape' => 'GetEvidenceResp', ],
            ],
        ],
        'SaveEvidenceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'data' =>  [ 'shape' => 'SaveEvidenceResp', ],
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
        'DescribeStampHistoryListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
            ],
        ],
        'DescribeStampHistoryListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStampHistoryListResultShape', ],
            ],
        ],
        'DescribeStampHistoryListResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'data' =>  [ 'shape' => 'PageStampHistoryResp', ],
            ],
        ],
        'EditStampRequestShape' => [
            'type' => 'structure',
            'members' => [
                'stampId' => [ 'type' => 'string', 'locationName' => 'stampId', ],
                'stampName' => [ 'type' => 'string', 'locationName' => 'stampName', ],
            ],
        ],
        'EditStampResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'EditStampResultShape', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeStampListResultShape', ],
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
        'EditStampResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
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
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
                'templateType' => [ 'type' => 'string', 'locationName' => 'templateType', ],
            ],
        ],
        'PaddingTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
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
        'PaddingTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'paddingSpec' =>  [ 'shape' => 'PaddingSpec', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
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
        'PaddingTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PaddingTemplateResultShape', ],
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
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeTemplateListResultShape', ],
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
