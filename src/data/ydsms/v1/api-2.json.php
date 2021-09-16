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
        'ModifyStatusUsingGET' => [
            'name' => 'ModifyStatusUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsApps/{appId}:modifyStatus',
            ],
            'input' => [ 'shape' => 'ModifyStatusUsingGETRequestShape', ],
            'output' => [ 'shape' => 'ModifyStatusUsingGETResponseShape', ],
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
                'method' => 'GET',
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
        'SendMessagesByOrderIdUsingPOST' => [
            'name' => 'SendMessagesByOrderIdUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sendMessagesByOrderId',
            ],
            'input' => [ 'shape' => 'SendMessagesByOrderIdUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'SendMessagesByOrderIdUsingPOSTResponseShape', ],
        ],
        'SendMessagesByPinUsingPOST' => [
            'name' => 'SendMessagesByPinUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sendMessagesByPin',
            ],
            'input' => [ 'shape' => 'SendMessagesByPinUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'SendMessagesByPinUsingPOSTResponseShape', ],
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
        'ModifySmsTaskUsingPOST' => [
            'name' => 'ModifySmsTaskUsingPOST',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/smsTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'ModifySmsTaskUsingPOSTRequestShape', ],
            'output' => [ 'shape' => 'ModifySmsTaskUsingPOSTResponseShape', ],
        ],
        'TaskDeleteUsingDelete' => [
            'name' => 'TaskDeleteUsingDelete',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/smsTasks/{taskId}',
            ],
            'input' => [ 'shape' => 'TaskDeleteUsingDeleteRequestShape', ],
            'output' => [ 'shape' => 'TaskDeleteUsingDeleteResponseShape', ],
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
        'GetSmsTaskContentUsingGET' => [
            'name' => 'GetSmsTaskContentUsingGET',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/smsTasks:getSmsTaskContent',
            ],
            'input' => [ 'shape' => 'GetSmsTaskContentUsingGETRequestShape', ],
            'output' => [ 'shape' => 'GetSmsTaskContentUsingGETResponseShape', ],
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
    ],
];
