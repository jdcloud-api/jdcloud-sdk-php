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
        'AddTemplate' => [
            'name' => 'AddTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/addTemplate',
            ],
            'input' => [ 'shape' => 'AddTemplateRequestShape', ],
            'output' => [ 'shape' => 'AddTemplateResponseShape', ],
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
        'RespCreditData' => [
            'type' => 'structure',
            'members' => [
                'creditId' => [ 'type' => 'string', 'locationName' => 'creditId', ],
            ],
        ],
        'RespQueryCreditListData' => [
            'type' => 'structure',
            'members' => [
                'creditId' => [ 'type' => 'string', 'locationName' => 'creditId', ],
                'creditName' => [ 'type' => 'string', 'locationName' => 'creditName', ],
                'creditDesc' => [ 'type' => 'string', 'locationName' => 'creditDesc', ],
            ],
        ],
        'RespQueryTemplateListData' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'contentSize' => [ 'type' => 'string', 'locationName' => 'contentSize', ],
                'aptitudesId' => [ 'type' => 'string', 'locationName' => 'aptitudesId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'RespTemplateData' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'SendStatus' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'mobileNum' => [ 'type' => 'string', 'locationName' => 'mobileNum', ],
                'stateFlag' => [ 'type' => 'integer', 'locationName' => 'stateFlag', ],
                'sendTime' => [ 'type' => 'string', 'locationName' => 'sendTime', ],
            ],
        ],
        'SendBatchMsg' => [
            'type' => 'structure',
            'members' => [
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
            ],
        ],
        'QuerySendStatus' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'detailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SendStatus', ], ],
            ],
        ],
        'TemplateContent' => [
            'type' => 'structure',
            'members' => [
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'QueryCreditListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EditCreditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'businessLicense' => [ 'type' => 'string', 'locationName' => 'businessLicense', ],
                'businessLicenseName' => [ 'type' => 'string', 'locationName' => 'businessLicenseName', ],
                'signedAuthorization' => [ 'type' => 'string', 'locationName' => 'signedAuthorization', ],
                'signedAuthorizationName' => [ 'type' => 'string', 'locationName' => 'signedAuthorizationName', ],
                'informationSecurity' => [ 'type' => 'string', 'locationName' => 'informationSecurity', ],
                'informationSecurityName' => [ 'type' => 'string', 'locationName' => 'informationSecurityName', ],
                'membershipCertificate' => [ 'type' => 'string', 'locationName' => 'membershipCertificate', ],
                'membershipCertificateName' => [ 'type' => 'string', 'locationName' => 'membershipCertificateName', ],
                'otherCertificate' => [ 'type' => 'string', 'locationName' => 'otherCertificate', ],
                'otherCertificateName' => [ 'type' => 'string', 'locationName' => 'otherCertificateName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteCreditResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCreditResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryCreditListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryCreditListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCreditResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespCreditData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EditCreditResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditCreditResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCreditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EditCreditResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespCreditData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryCreditListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespCreditPageResult', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AddCreditResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddCreditResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddCreditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'businessLicense' => [ 'type' => 'string', 'locationName' => 'businessLicense', ],
                'businessLicenseName' => [ 'type' => 'string', 'locationName' => 'businessLicenseName', ],
                'signedAuthorization' => [ 'type' => 'string', 'locationName' => 'signedAuthorization', ],
                'signedAuthorizationName' => [ 'type' => 'string', 'locationName' => 'signedAuthorizationName', ],
                'informationSecurity' => [ 'type' => 'string', 'locationName' => 'informationSecurity', ],
                'informationSecurityName' => [ 'type' => 'string', 'locationName' => 'informationSecurityName', ],
                'membershipCertificate' => [ 'type' => 'string', 'locationName' => 'membershipCertificate', ],
                'membershipCertificateName' => [ 'type' => 'string', 'locationName' => 'membershipCertificateName', ],
                'otherCertificate' => [ 'type' => 'string', 'locationName' => 'otherCertificate', ],
                'otherCertificateName' => [ 'type' => 'string', 'locationName' => 'otherCertificateName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteCreditResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespCreditData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'RespCreditPageResult' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageCount' => [ 'type' => 'integer', 'locationName' => 'pageCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'RespQueryCreditListData', ], ],
            ],
        ],
        'QueryPackageRemainderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryPackageRemainderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryPackageRemainderResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RespPackageResult' => [
            'type' => 'structure',
            'members' => [
                'remainder' => [ 'type' => 'long', 'locationName' => 'remainder', ],
            ],
        ],
        'QueryPackageRemainderResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespPackageResult', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QuerySendStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QuerySendStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SendBatchMsgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SendBatchMsgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QuerySendStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'sequenceNumber' => [ 'type' => 'string', 'locationName' => 'sequenceNumber', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QuerySendStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'QuerySendStatus', ], ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'SendBatchMsgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'phone' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'params' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SendBatchMsgResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'SendBatchMsg', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespTemplateData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespTemplateData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryTemplateByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTemplateByIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTemplateListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageLimit' => [ 'type' => 'integer', 'locationName' => 'pageLimit', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EditTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EditTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RespTemplatePageResult' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageCount' => [ 'type' => 'integer', 'locationName' => 'pageCount', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'RespQueryTemplateListData', ], ],
            ],
        ],
        'DeleteTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTemplateByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespQueryTemplateListData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EditTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespTemplateData', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'QueryTemplateByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'aptitudesId' => [ 'type' => 'string', 'locationName' => 'aptitudesId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'signContent' => [ 'type' => 'string', 'locationName' => 'signContent', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateContent', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryTemplateListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryTemplateListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EditTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'aptitudesId' => [ 'type' => 'string', 'locationName' => 'aptitudesId', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'signContent' => [ 'type' => 'string', 'locationName' => 'signContent', ],
                'content' => [ 'type' => 'list', 'member' => [ 'shape' => 'TemplateContent', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryTemplateListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'RespTemplatePageResult', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
    ],
];
