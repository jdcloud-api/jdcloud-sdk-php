<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ydsms',
        'protocol' => 'json',
//        'serviceFullName' => 'ydsms',
//        'serviceId' => 'ydsms',
    ],
    'operations' => [
        'ListSmsAppsUsingGET' => [
            'name' => 'ListSmsAppsUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsApps',
            ],
            'input' => [ 'shape' => 'ListSmsAppsUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsAppsUsingGETResponseShape', ],
        ],
        'CreateSmsAppUsingPOST' => [
            'name' => 'CreateSmsAppUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsApps',
            ],
            'input' => [ 'shape' => 'CreateSmsAppUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'CreateSmsAppUsingPOSTResponseShape', ],
        ],
        'GetSmsAppByIdUsingGET' => [
            'name' => 'GetSmsAppByIdUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsApps/{appId}',
            ],
            'input' => [ 'shape' => 'GetSmsAppByIdUsingGETRequestShape', ],
            'output' => [ 'shape' => 'GetSmsAppByIdUsingGETResponseShape', ],
        ],
        'ModifySmsAppUsingPOST' => [
            'name' => 'ModifySmsAppUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsApps/{appId}',
            ],
            'input' => [ 'shape' => 'ModifySmsAppUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'ModifySmsAppUsingPOSTResponseShape', ],
        ],
        'QuerySecretKeyUsingGET' => [
            'name' => 'QuerySecretKeyUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsApps/{appId}:querySecretKey',
            ],
            'input' => [ 'shape' => 'QuerySecretKeyUsingGETRequestShape', ],
            'output' => [ 'shape' => 'QuerySecretKeyUsingGETResponseShape', ],
        ],
        'ModifyStatusUsingPOST' => [
            'name' => 'ModifyStatusUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsApps/{appId}:modifyStatus',
            ],
            'input' => [ 'shape' => 'ModifyStatusUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'ModifyStatusUsingPOSTResponseShape', ],
        ],
        'ListSmsSendOverviewUsingGET' => [
            'name' => 'ListSmsSendOverviewUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsApps/{appId}:overview',
            ],
            'input' => [ 'shape' => 'ListSmsSendOverviewUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsSendOverviewUsingGETResponseShape', ],
        ],
        'QuerySendRecordUsingGET' => [
            'name' => 'QuerySendRecordUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsApps/{appId}:querySendRecord',
            ],
            'input' => [ 'shape' => 'QuerySendRecordUsingGETRequestShape', ],
            'output' => [ 'shape' => 'QuerySendRecordUsingGETResponseShape', ],
        ],
        'QueryReplyRecordUsingGET' => [
            'name' => 'QueryReplyRecordUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsApps/{appId}:queryReplyRecord',
            ],
            'input' => [ 'shape' => 'QueryReplyRecordUsingGETRequestShape', ],
            'output' => [ 'shape' => 'QueryReplyRecordUsingGETResponseShape', ],
        ],
        'QueryReceiptRecordUsingGET' => [
            'name' => 'QueryReceiptRecordUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsApps/{appId}:queryReceiptRecord',
            ],
            'input' => [ 'shape' => 'QueryReceiptRecordUsingGETRequestShape', ],
            'output' => [ 'shape' => 'QueryReceiptRecordUsingGETResponseShape', ],
        ],
        'ListSmsAppGeneralSettingsUsingGET' => [
            'name' => 'ListSmsAppGeneralSettingsUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsAppGeneralSettings',
            ],
            'input' => [ 'shape' => 'ListSmsAppGeneralSettingsUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsAppGeneralSettingsUsingGETResponseShape', ],
        ],
        'ModifyAppGeneralSettingById' => [
            'name' => 'ModifyAppGeneralSettingById',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsAppGeneralSettings/{id}:modify',
            ],
            'input' => [ 'shape' => 'ModifyAppGeneralSettingByIdRequestShape', ],
            'output' => [ 'shape' => 'ModifyAppGeneralSettingByIdResponseShape', ],
        ],
        'ListSmsCertificateTypesUsingGET' => [
            'name' => 'ListSmsCertificateTypesUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsCertificateTypes',
            ],
            'input' => [ 'shape' => 'ListSmsCertificateTypesUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsCertificateTypesUsingGETResponseShape', ],
        ],
        'ListSmsSendOverviewUsingGET' => [
            'name' => 'ListSmsSendOverviewUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/apps/{appId}:overview',
            ],
            'input' => [ 'shape' => 'ListSmsSendOverviewUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsSendOverviewUsingGETResponseShape', ],
        ],
        'ListSmsPackagesUsingGET' => [
            'name' => 'ListSmsPackagesUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsPackages',
            ],
            'input' => [ 'shape' => 'ListSmsPackagesUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsPackagesUsingGETResponseShape', ],
        ],
        'CreateSmsPackageUsingPOST' => [
            'name' => 'CreateSmsPackageUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsPackages',
            ],
            'input' => [ 'shape' => 'CreateSmsPackageUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'CreateSmsPackageUsingPOSTResponseShape', ],
        ],
        'GetSmsPackageByIdUsingGET' => [
            'name' => 'GetSmsPackageByIdUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsPackages/{packageId}',
            ],
            'input' => [ 'shape' => 'GetSmsPackageByIdUsingGETRequestShape', ],
            'output' => [ 'shape' => 'GetSmsPackageByIdUsingGETResponseShape', ],
        ],
        'GetSmsPackageSpecificationsUsingGET' => [
            'name' => 'GetSmsPackageSpecificationsUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsPackages/{packageType}:querySpecifications',
            ],
            'input' => [ 'shape' => 'GetSmsPackageSpecificationsUsingGETRequestShape', ],
            'output' => [ 'shape' => 'GetSmsPackageSpecificationsUsingGETResponseShape', ],
        ],
        'SendMessagesUsingPOST' => [
            'name' => 'SendMessagesUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsSendMessages',
            ],
            'input' => [ 'shape' => 'SendMessagesUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'SendMessagesUsingPOSTResponseShape', ],
        ],
        'ListSmsSignsUsingGET' => [
            'name' => 'ListSmsSignsUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsSigns',
            ],
            'input' => [ 'shape' => 'ListSmsSignsUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsSignsUsingGETResponseShape', ],
        ],
        'CreateSmsSignUsingPOST' => [
            'name' => 'CreateSmsSignUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsSigns',
            ],
            'input' => [ 'shape' => 'CreateSmsSignUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'CreateSmsSignUsingPOSTResponseShape', ],
        ],
        'GetSmsSignByIdUsingGET' => [
            'name' => 'GetSmsSignByIdUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsSigns/{signId}',
            ],
            'input' => [ 'shape' => 'GetSmsSignByIdUsingGETRequestShape', ],
            'output' => [ 'shape' => 'GetSmsSignByIdUsingGETResponseShape', ],
        ],
        'ModifySmsSignUsingPOST' => [
            'name' => 'ModifySmsSignUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsSigns/{signId}',
            ],
            'input' => [ 'shape' => 'ModifySmsSignUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'ModifySmsSignUsingPOSTResponseShape', ],
        ],
        'ListSmsSignTypesUsingGET' => [
            'name' => 'ListSmsSignTypesUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsSignTypes',
            ],
            'input' => [ 'shape' => 'ListSmsSignTypesUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsSignTypesUsingGETResponseShape', ],
        ],
        'ListSmsTasksUsingGET' => [
            'name' => 'ListSmsTasksUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsTasks',
            ],
            'input' => [ 'shape' => 'ListSmsTasksUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsTasksUsingGETResponseShape', ],
        ],
        'CreateSmsTaskUsingPOST' => [
            'name' => 'CreateSmsTaskUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsTasks',
            ],
            'input' => [ 'shape' => 'CreateSmsTaskUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'CreateSmsTaskUsingPOSTResponseShape', ],
        ],
        'GetSmsTaskIdUsingGET' => [
            'name' => 'GetSmsTaskIdUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'GetSmsTaskIdUsingGETRequestShape', ],
            'output' => [ 'shape' => 'GetSmsTaskIdUsingGETResponseShape', ],
        ],
        'TaskStartUsingGET' => [
            'name' => 'TaskStartUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsTasks/{taskId}:start',
            ],
            'input' => [ 'shape' => 'TaskStartUsingGETRequestShape', ],
            'output' => [ 'shape' => 'TaskStartUsingGETResponseShape', ],
        ],
        'ListSmsTemplatesUsingGET' => [
            'name' => 'ListSmsTemplatesUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsTemplates',
            ],
            'input' => [ 'shape' => 'ListSmsTemplatesUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ListSmsTemplatesUsingGETResponseShape', ],
        ],
        'CreateSmsTemplateUsingPOST' => [
            'name' => 'CreateSmsTemplateUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsTemplates',
            ],
            'input' => [ 'shape' => 'CreateSmsTemplateUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'CreateSmsTemplateUsingPOSTResponseShape', ],
        ],
        'GetSmsTemplateByIdUsingGET' => [
            'name' => 'GetSmsTemplateByIdUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'GetSmsTemplateByIdUsingGETRequestShape', ],
            'output' => [ 'shape' => 'GetSmsTemplateByIdUsingGETResponseShape', ],
        ],
        'ModifySmsTemplateUsingPOST' => [
            'name' => 'ModifySmsTemplateUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsTemplates/{templateId}',
            ],
            'input' => [ 'shape' => 'ModifySmsTemplateUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'ModifySmsTemplateUsingPOSTResponseShape', ],
        ],
        'OpenServiceUsingPOST' => [
            'name' => 'OpenServiceUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsUsers',
            ],
            'input' => [ 'shape' => 'OpenServiceUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'OpenServiceUsingPOSTResponseShape', ],
        ],
        'QueryRemainingUsingGET' => [
            'name' => 'QueryRemainingUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsUsers/{packageType}:queryRemaining',
            ],
            'input' => [ 'shape' => 'QueryRemainingUsingGETRequestShape', ],
            'output' => [ 'shape' => 'QueryRemainingUsingGETResponseShape', ],
        ],
        'QueryAmountUsingGET' => [
            'name' => 'QueryAmountUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsUsers/{packageType}:queryAmount',
            ],
            'input' => [ 'shape' => 'QueryAmountUsingGETRequestShape', ],
            'output' => [ 'shape' => 'QueryAmountUsingGETResponseShape', ],
        ],
    ],
    'shapes' => [
        'ListSmsSendOverviewVO' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'sendOverviewVOList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SendOverviewVO', ], ],
            ],
        ],
        'SendMessageReqVO' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'params' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'phoneList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'SmsTaskVO' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'sendNumberUrl' => [ 'type' => 'string', 'locationName' => 'sendNumberUrl', ],
                'sendTime' => [ 'type' => 'string', 'locationName' => 'sendTime', ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'SendOverviewVO' => [
            'type' => 'structure',
            'members' => [
                'billingCount' => [ 'type' => 'long', 'locationName' => 'billingCount', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'sendCount' => [ 'type' => 'long', 'locationName' => 'sendCount', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'successCount' => [ 'type' => 'long', 'locationName' => 'successCount', ],
                'successRate' => [ 'type' => 'string', 'locationName' => 'successRate', ],
            ],
        ],
        'SmsSignVO' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'applyStatus' => [ 'type' => 'integer', 'locationName' => 'applyStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'signContent' => [ 'type' => 'string', 'locationName' => 'signContent', ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'signTypeId' => [ 'type' => 'integer', 'locationName' => 'signTypeId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'auditorExplanation' => [ 'type' => 'string', 'locationName' => 'auditorExplanation', ],
                'signPurpose' => [ 'type' => 'integer', 'locationName' => 'signPurpose', ],
                'signAttorneyUrl' => [ 'type' => 'string', 'locationName' => 'signAttorneyUrl', ],
                'signCertificateUrl' => [ 'type' => 'string', 'locationName' => 'signCertificateUrl', ],
                'signOtherCertificateUrl' => [ 'type' => 'string', 'locationName' => 'signOtherCertificateUrl', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'MtResVO' => [
            'type' => 'structure',
            'members' => [
                'reqCode' => [ 'type' => 'string', 'locationName' => 'reqCode', ],
                'reqId' => [ 'type' => 'string', 'locationName' => 'reqId', ],
                'reqMsg' => [ 'type' => 'string', 'locationName' => 'reqMsg', ],
            ],
        ],
        'SendRecord' => [
            'type' => 'structure',
            'members' => [
                'sendNumber' => [ 'type' => 'string', 'locationName' => 'sendNumber', ],
                'smsContent' => [ 'type' => 'string', 'locationName' => 'smsContent', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'sendTime' => [ 'type' => 'string', 'locationName' => 'sendTime', ],
                'sendStatus' => [ 'type' => 'string', 'locationName' => 'sendStatus', ],
            ],
        ],
        'GeneralSettings' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'settingDescription' => [ 'type' => 'string', 'locationName' => 'settingDescription', ],
                'settingType' => [ 'type' => 'integer', 'locationName' => 'settingType', ],
                'settingValue' => [ 'type' => 'string', 'locationName' => 'settingValue', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SmsTemplateVO' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'applyStatus' => [ 'type' => 'integer', 'locationName' => 'applyStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'templateContent' => [ 'type' => 'string', 'locationName' => 'templateContent', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'integer', 'locationName' => 'templateType', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'QueryReceiptRecordRes' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'sendOverviewVOList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReceiptRecord', ], ],
            ],
        ],
        'CertificateType' => [
            'type' => 'structure',
            'members' => [
                'certificateTypeName' => [ 'type' => 'string', 'locationName' => 'certificateTypeName', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ModifySmsAppReqVO' => [
            'type' => 'structure',
            'members' => [
                'appDesc' => [ 'type' => 'integer', 'locationName' => 'appDesc', ],
                'appName' => [ 'type' => 'integer', 'locationName' => 'appName', ],
            ],
        ],
        'SmsAppVO' => [
            'type' => 'structure',
            'members' => [
                'accessKeyId' => [ 'type' => 'string', 'locationName' => 'accessKeyId', ],
                'appDesc' => [ 'type' => 'string', 'locationName' => 'appDesc', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ReceiptRecord' => [
            'type' => 'structure',
            'members' => [
                'receiptCount' => [ 'type' => 'long', 'locationName' => 'receiptCount', ],
                'unReceiptCount' => [ 'type' => 'long', 'locationName' => 'unReceiptCount', ],
                'receiptRate' => [ 'type' => 'string', 'locationName' => 'receiptRate', ],
                'receiptSuccessCount' => [ 'type' => 'long', 'locationName' => 'receiptSuccessCount', ],
                'receiptFailCount' => [ 'type' => 'long', 'locationName' => 'receiptFailCount', ],
                'receiptSuccessRate' => [ 'type' => 'string', 'locationName' => 'receiptSuccessRate', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'SpecificationVO' => [
            'type' => 'structure',
            'members' => [
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
            ],
        ],
        'SmsPackageVO' => [
            'type' => 'structure',
            'members' => [
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
                'packageName' => [ 'type' => 'string', 'locationName' => 'packageName', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ReplyRecord' => [
            'type' => 'structure',
            'members' => [
                'sendNumber' => [ 'type' => 'string', 'locationName' => 'sendNumber', ],
                'replyContent' => [ 'type' => 'string', 'locationName' => 'replyContent', ],
                'replyTime' => [ 'type' => 'string', 'locationName' => 'replyTime', ],
            ],
        ],
        'SignType' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'signTypeName' => [ 'type' => 'string', 'locationName' => 'signTypeName', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ModifyStatusUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'CreateSmsAppUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'QueryReceiptRecordUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'queryReceiptRecordRes' =>  [ 'shape' => 'QueryReceiptRecordRes', ],
            ],
        ],
        'CreateSmsAppUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateSmsAppUsingPOSTResultShape', ],
            ],
        ],
        'QuerySecretKeyUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'ListSmsSendOverviewUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsSendOverviewUsingGETResultShape', ],
            ],
        ],
        'ModifyStatusUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'QuerySendRecordUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsApps' => [ 'type' => 'list', 'member' => [ 'shape' => 'SendRecord', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifySmsAppUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appDesc' => [ 'type' => 'int32', 'locationName' => 'appDesc', ],
                'appName' => [ 'type' => 'int32', 'locationName' => 'appName', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'GetSmsAppByIdUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSmsAppByIdUsingGETResultShape', ],
            ],
        ],
        'QueryReplyRecordUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsApps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReplyRecord', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'ListSmsAppsUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsAppsUsingGETResultShape', ],
            ],
        ],
        'QuerySecretKeyUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
            ],
        ],
        'ListSmsAppsUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'ModifySmsAppUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ModifySmsAppUsingPOSTResultShape', ],
            ],
        ],
        'QuerySecretKeyUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QuerySecretKeyUsingGETResultShape', ],
            ],
        ],
        'ListSmsSendOverviewUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'listSmsSendOverviewVO' =>  [ 'shape' => 'ListSmsSendOverviewVO', ],
            ],
        ],
        'ModifyStatusUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ModifyStatusUsingPOSTResultShape', ],
            ],
        ],
        'CreateSmsAppUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appDesc' => [ 'type' => 'string', 'locationName' => 'appDesc', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
            ],
        ],
        'QueryReplyRecordUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sendNumber' => [ 'type' => 'string', 'locationName' => 'sendNumber', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'ModifySmsAppUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'QuerySendRecordUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QuerySendRecordUsingGETResultShape', ],
            ],
        ],
        'GetSmsAppByIdUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsAppVO' =>  [ 'shape' => 'SmsAppVO', ],
            ],
        ],
        'QueryReplyRecordUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryReplyRecordUsingGETResultShape', ],
            ],
        ],
        'ListSmsSendOverviewUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'ListSmsAppsUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsApps' => [ 'type' => 'list', 'member' => [ 'shape' => 'SmsAppVO', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetSmsAppByIdUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'QueryReceiptRecordUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'QueryReceiptRecordUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryReceiptRecordUsingGETResultShape', ],
            ],
        ],
        'QuerySendRecordUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sendStatus' => [ 'type' => 'integer', 'locationName' => 'sendStatus', ],
                'sendNumber' => [ 'type' => 'string', 'locationName' => 'sendNumber', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'sign_id' => [ 'type' => 'string', 'locationName' => 'sign_id', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
            ],
        ],
        'ModifyAppGeneralSettingByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ModifyAppGeneralSettingByIdResultShape', ],
            ],
        ],
        'ListSmsAppGeneralSettingsUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'appGeneralSettings' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeneralSettings', ], ],
            ],
        ],
        'ListSmsAppGeneralSettingsUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
            ],
        ],
        'ListSmsAppGeneralSettingsUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsAppGeneralSettingsUsingGETResultShape', ],
            ],
        ],
        'ModifyAppGeneralSettingByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'settingValue' => [ 'type' => 'string', 'locationName' => 'settingValue', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'ModifyAppGeneralSettingByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'ListSmsCertificateTypesUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListSmsCertificateTypesUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsCertificateTypesUsingGETResultShape', ],
            ],
        ],
        'ListSmsCertificateTypesUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'certificateTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'CertificateType', ], ],
            ],
        ],
        'ListSmsPackagesUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsPackagesUsingGETResultShape', ],
            ],
        ],
        'CreateSmsPackageUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageCount' => [ 'type' => 'integer', 'locationName' => 'packageCount', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'specification' => [ 'type' => 'string', 'locationName' => 'specification', ],
            ],
        ],
        'GetSmsPackageByIdUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSmsPackageByIdUsingGETResultShape', ],
            ],
        ],
        'CreateSmsPackageUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateSmsPackageUsingPOSTResultShape', ],
            ],
        ],
        'GetSmsPackageSpecificationsUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSmsPackageSpecificationsUsingGETResultShape', ],
            ],
        ],
        'ListSmsPackagesUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'GetSmsPackageByIdUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsPackageVO' =>  [ 'shape' => 'SmsPackageVO', ],
            ],
        ],
        'ListSmsPackagesUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsPackages' => [ 'type' => 'list', 'member' => [ 'shape' => 'SmsPackageVO', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetSmsPackageSpecificationsUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
            ],
        ],
        'CreateSmsPackageUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'GetSmsPackageSpecificationsUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'specificationVOS' => [ 'type' => 'list', 'member' => [ 'shape' => 'SpecificationVO', ], ],
            ],
        ],
        'GetSmsPackageByIdUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageId' => [ 'type' => 'string', 'locationName' => 'packageId', ],
            ],
        ],
        'SendMessagesUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'params' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'phoneList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'SendMessagesUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SendMessagesUsingPOSTResultShape', ],
            ],
        ],
        'SendMessagesUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'mtResVO' =>  [ 'shape' => 'MtResVO', ],
            ],
        ],
        'ListSmsSignsUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ModifySmsSignUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ModifySmsSignUsingPOSTResultShape', ],
            ],
        ],
        'ListSmsSignsUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsSignsUsingGETResultShape', ],
            ],
        ],
        'CreateSmsSignUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'applyExplanation' => [ 'type' => 'string', 'locationName' => 'applyExplanation', ],
                'signAttorneyUrl' => [ 'type' => 'string', 'locationName' => 'signAttorneyUrl', ],
                'signCertificateUrl' => [ 'type' => 'string', 'locationName' => 'signCertificateUrl', ],
                'signContent' => [ 'type' => 'string', 'locationName' => 'signContent', ],
                'signOtherCertificateUrl' => [ 'type' => 'string', 'locationName' => 'signOtherCertificateUrl', ],
                'signPurpose' => [ 'type' => 'integer', 'locationName' => 'signPurpose', ],
                'signTypeId' => [ 'type' => 'integer', 'locationName' => 'signTypeId', ],
            ],
        ],
        'GetSmsSignByIdUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
            ],
        ],
        'ModifySmsSignUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
            ],
        ],
        'GetSmsSignByIdUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSmsSignByIdUsingGETResultShape', ],
            ],
        ],
        'ModifySmsSignUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'applyExplanation' => [ 'type' => 'string', 'locationName' => 'applyExplanation', ],
                'signAttorneyUrl' => [ 'type' => 'string', 'locationName' => 'signAttorneyUrl', ],
                'signCertificateUrl' => [ 'type' => 'string', 'locationName' => 'signCertificateUrl', ],
                'signContent' => [ 'type' => 'string', 'locationName' => 'signContent', ],
                'signOtherCertificateUrl' => [ 'type' => 'string', 'locationName' => 'signOtherCertificateUrl', ],
                'signPurpose' => [ 'type' => 'integer', 'locationName' => 'signPurpose', ],
                'signTypeId' => [ 'type' => 'integer', 'locationName' => 'signTypeId', ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
            ],
        ],
        'CreateSmsSignUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
            ],
        ],
        'CreateSmsSignUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateSmsSignUsingPOSTResultShape', ],
            ],
        ],
        'ListSmsSignsUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsSigns' => [ 'type' => 'list', 'member' => [ 'shape' => 'SmsSignVO', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetSmsSignByIdUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsSignVO' =>  [ 'shape' => 'SmsSignVO', ],
            ],
        ],
        'ListSmsSignTypesUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsSignTypesUsingGETResultShape', ],
            ],
        ],
        'ListSmsSignTypesUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListSmsSignTypesUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'signTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'SignType', ], ],
            ],
        ],
        'CreateSmsTaskUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'sendNumberUrl' => [ 'type' => 'string', 'locationName' => 'sendNumberUrl', ],
                'sendTime' => [ 'type' => 'string', 'locationName' => 'sendTime', ],
                'signId' => [ 'type' => 'string', 'locationName' => 'signId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'GetSmsTaskIdUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'GetSmsTaskIdUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsTaskVO' =>  [ 'shape' => 'SmsTaskVO', ],
            ],
        ],
        'ListSmsTasksUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsTasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SmsTaskVO', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'ListSmsTasksUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'TaskStartUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'GetSmsTaskIdUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSmsTaskIdUsingGETResultShape', ],
            ],
        ],
        'TaskStartUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'TaskStartUsingGETResultShape', ],
            ],
        ],
        'CreateSmsTaskUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ListSmsTasksUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsTasksUsingGETResultShape', ],
            ],
        ],
        'TaskStartUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateSmsTaskUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateSmsTaskUsingPOSTResultShape', ],
            ],
        ],
        'CreateSmsTemplateUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateSmsTemplateUsingPOSTResultShape', ],
            ],
        ],
        'ModifySmsTemplateUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ModifySmsTemplateUsingPOSTResultShape', ],
            ],
        ],
        'ModifySmsTemplateUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'applyExplanation' => [ 'type' => 'string', 'locationName' => 'applyExplanation', ],
                'templateContent' => [ 'type' => 'string', 'locationName' => 'templateContent', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'integer', 'locationName' => 'templateType', ],
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ListSmsTemplatesUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ListSmsTemplatesUsingGETResultShape', ],
            ],
        ],
        'GetSmsTemplateByIdUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSmsTemplateByIdUsingGETResultShape', ],
            ],
        ],
        'GetSmsTemplateByIdUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'CreateSmsTemplateUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'applyExplanation' => [ 'type' => 'string', 'locationName' => 'applyExplanation', ],
                'templateContent' => [ 'type' => 'string', 'locationName' => 'templateContent', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateType' => [ 'type' => 'integer', 'locationName' => 'templateType', ],
            ],
        ],
        'CreateSmsTemplateUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ModifySmsTemplateUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
            ],
        ],
        'ListSmsTemplatesUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appId' => [ 'type' => 'string', 'locationName' => 'appId', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ListSmsTemplatesUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'SmsTemplateVO', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetSmsTemplateByIdUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'smsTemplateVO' =>  [ 'shape' => 'SmsTemplateVO', ],
            ],
        ],
        'OpenServiceUsingPOSTResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'OpenServiceUsingPOSTResultShape', ],
            ],
        ],
        'QueryRemainingUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
            ],
        ],
        'QueryAmountUsingGETRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
            ],
        ],
        'OpenServiceUsingPOSTRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryRemainingUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'remaining' => [ 'type' => 'long', 'locationName' => 'remaining', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'remainingRate' => [ 'type' => 'string', 'locationName' => 'remainingRate', ],
            ],
        ],
        'QueryAmountUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryAmountUsingGETResultShape', ],
            ],
        ],
        'OpenServiceUsingPOSTResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'QueryRemainingUsingGETResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryRemainingUsingGETResultShape', ],
            ],
        ],
        'QueryAmountUsingGETResultShape' => [
            'type' => 'structure',
            'members' => [
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'amount' => [ 'type' => 'long', 'locationName' => 'amount', ],
            ],
        ],
    ],
];
