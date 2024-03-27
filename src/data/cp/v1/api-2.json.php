<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'cp',
        'protocol' => 'json',
//        'serviceFullName' => 'cp',
//        'serviceId' => 'cp',
    ],
    'operations' => [
        'CreatePartner' => [
            'name' => 'CreatePartner',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/partner',
            ],
            'input' => [ 'shape' => 'CreatePartnerRequestShape', ],
            'output' => [ 'shape' => 'CreatePartnerResponseShape', ],
        ],
        'Usercpcheck' => [
            'name' => 'Usercpcheck',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/usercpcheck',
            ],
            'input' => [ 'shape' => 'UsercpcheckRequestShape', ],
            'output' => [ 'shape' => 'UsercpcheckResponseShape', ],
        ],
        'SetUserGrace' => [
            'name' => 'SetUserGrace',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/provider:graceSetting',
            ],
            'input' => [ 'shape' => 'SetUserGraceRequestShape', ],
            'output' => [ 'shape' => 'SetUserGraceResponseShape', ],
        ],
        'GetUserGrace' => [
            'name' => 'GetUserGrace',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/provider:graceInfo',
            ],
            'input' => [ 'shape' => 'GetUserGraceRequestShape', ],
            'output' => [ 'shape' => 'GetUserGraceResponseShape', ],
        ],
        'PartnerToken' => [
            'name' => 'PartnerToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/partner/{partnerId}/token',
            ],
            'input' => [ 'shape' => 'PartnerTokenRequestShape', ],
            'output' => [ 'shape' => 'PartnerTokenResponseShape', ],
        ],
        'PartnerStsToken' => [
            'name' => 'PartnerStsToken',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/partner/{partnerId}/ststoken',
            ],
            'input' => [ 'shape' => 'PartnerStsTokenRequestShape', ],
            'output' => [ 'shape' => 'PartnerStsTokenResponseShape', ],
        ],
        'CheckUser' => [
            'name' => 'CheckUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/partner/{partnerId}/user:checkUserInfo',
            ],
            'input' => [ 'shape' => 'CheckUserRequestShape', ],
            'output' => [ 'shape' => 'CheckUserResponseShape', ],
        ],
        'SendVerificationCode' => [
            'name' => 'SendVerificationCode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/partner/{partnerId}/user:sendVerificationCode',
            ],
            'input' => [ 'shape' => 'SendVerificationCodeRequestShape', ],
            'output' => [ 'shape' => 'SendVerificationCodeResponseShape', ],
        ],
        'CreateUser' => [
            'name' => 'CreateUser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/partner/{partnerId}/user:createUser',
            ],
            'input' => [ 'shape' => 'CreateUserRequestShape', ],
            'output' => [ 'shape' => 'CreateUserResponseShape', ],
        ],
        'ListPartnerUsers' => [
            'name' => 'ListPartnerUsers',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/partner/{partnerId}/users',
            ],
            'input' => [ 'shape' => 'ListPartnerUsersRequestShape', ],
            'output' => [ 'shape' => 'ListPartnerUsersResponseShape', ],
        ],
        'CreateUserAuth' => [
            'name' => 'CreateUserAuth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/partner/{partnerId}/user/{userId}:createUserAuth',
            ],
            'input' => [ 'shape' => 'CreateUserAuthRequestShape', ],
            'output' => [ 'shape' => 'CreateUserAuthResponseShape', ],
        ],
    ],
    'shapes' => [
        'CheckUserInfo' => [
            'type' => 'structure',
            'members' => [
                'checkType' => [ 'type' => 'string', 'locationName' => 'checkType', ],
                'checkValue' => [ 'type' => 'string', 'locationName' => 'checkValue', ],
            ],
        ],
        'CreateUserInfo' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'countryCode' => [ 'type' => 'string', 'locationName' => 'countryCode', ],
                'customCountryCode' => [ 'type' => 'string', 'locationName' => 'customCountryCode', ],
                'mobilePhone' => [ 'type' => 'string', 'locationName' => 'mobilePhone', ],
                'customMobilePhone' => [ 'type' => 'string', 'locationName' => 'customMobilePhone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'verificationCode' => [ 'type' => 'string', 'locationName' => 'verificationCode', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
            ],
        ],
        'Partner' => [
            'type' => 'structure',
            'members' => [
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'cooperationStartTime' => [ 'type' => 'string', 'locationName' => 'cooperationStartTime', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'PartnerStsToken' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'projectId' => [ 'type' => 'string', 'locationName' => 'projectId', ],
            ],
        ],
        'PartnerToken' => [
            'type' => 'structure',
            'members' => [
                'tokenType' => [ 'type' => 'integer', 'locationName' => 'tokenType', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'projectId' => [ 'type' => 'string', 'locationName' => 'projectId', ],
                'projectName' => [ 'type' => 'string', 'locationName' => 'projectName', ],
            ],
        ],
        'PartnerUserInfo' => [
            'type' => 'structure',
            'members' => [
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'countryCode' => [ 'type' => 'string', 'locationName' => 'countryCode', ],
                'mobilePhone' => [ 'type' => 'string', 'locationName' => 'mobilePhone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'cooperationStartTime' => [ 'type' => 'string', 'locationName' => 'cooperationStartTime', ],
            ],
        ],
        'PatternVo' => [
            'type' => 'structure',
            'members' => [
                'providerCode' => [ 'type' => 'string', 'locationName' => 'providerCode', ],
                'providerId' => [ 'type' => 'long', 'locationName' => 'providerId', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'providerAccount' => [ 'type' => 'string', 'locationName' => 'providerAccount', ],
                'proofType' => [ 'type' => 'integer', 'locationName' => 'proofType', ],
                'isAuth' => [ 'type' => 'integer', 'locationName' => 'isAuth', ],
                'isMask' => [ 'type' => 'integer', 'locationName' => 'isMask', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'mode' => [ 'type' => 'integer', 'locationName' => 'mode', ],
                'providerName' => [ 'type' => 'string', 'locationName' => 'providerName', ],
                'tpaasSetting' => [ 'type' => 'string', 'locationName' => 'tpaasSetting', ],
                'proofTypeDetail' => [ 'type' => 'string', 'locationName' => 'proofTypeDetail', ],
            ],
        ],
        'ProviderVo' => [
            'type' => 'structure',
            'members' => [
                'providerCode' => [ 'type' => 'string', 'locationName' => 'providerCode', ],
                'providerId' => [ 'type' => 'string', 'locationName' => 'providerId', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'providerName' => [ 'type' => 'string', 'locationName' => 'providerName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'icon' => [ 'type' => 'string', 'locationName' => 'icon', ],
                'providerType' => [ 'type' => 'integer', 'locationName' => 'providerType', ],
            ],
        ],
        'ProviderUserVo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'providerId' => [ 'type' => 'long', 'locationName' => 'providerId', ],
                'providerPin' => [ 'type' => 'string', 'locationName' => 'providerPin', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'providerName' => [ 'type' => 'string', 'locationName' => 'providerName', ],
                'providerCode' => [ 'type' => 'string', 'locationName' => 'providerCode', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'proofType' => [ 'type' => 'integer', 'locationName' => 'proofType', ],
                'proof' => [ 'type' => 'string', 'locationName' => 'proof', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'huaweiPeriod' => [ 'type' => 'string', 'locationName' => 'huaweiPeriod', ],
            ],
        ],
        'SendVerificationCodeInfo' => [
            'type' => 'structure',
            'members' => [
                'mobilePhone' => [ 'type' => 'string', 'locationName' => 'mobilePhone', ],
                'countryCode' => [ 'type' => 'string', 'locationName' => 'countryCode', ],
                'timeout' => [ 'type' => 'integer', 'locationName' => 'timeout', ],
            ],
        ],
        'UserAuthInfo' => [
            'type' => 'structure',
            'members' => [
                'authStatus' => [ 'type' => 'integer', 'locationName' => 'authStatus', ],
                'subject' => [ 'type' => 'integer', 'locationName' => 'subject', ],
                'cardType' => [ 'type' => 'integer', 'locationName' => 'cardType', ],
                'cardNumber' => [ 'type' => 'string', 'locationName' => 'cardNumber', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'UserCpCheckInfo' => [
            'type' => 'structure',
            'members' => [
                'partnerPin' => [ 'type' => 'string', 'locationName' => 'partnerPin', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
            ],
        ],
        'UserGraceInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'CreatePartnerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'authProvider' => [ 'type' => 'string', 'locationName' => 'authProvider', ],
                'roleName' => [ 'type' => 'string', 'locationName' => 'roleName', ],
                'policyNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'assumeRolePolicyDocument' => [ 'type' => 'string', 'locationName' => 'assumeRolePolicyDocument', ],
                'roleDescription' => [ 'type' => 'string', 'locationName' => 'roleDescription', ],
            ],
        ],
        'CreatePartnerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePartnerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UsercpcheckResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UsercpcheckResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UsercpcheckRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userCpCheckInfo' =>  [ 'shape' => 'UserCpCheckInfo', ],
            ],
        ],
        'UsercpcheckResultShape' => [
            'type' => 'structure',
            'members' => [
                'check' => [ 'type' => 'boolean', 'locationName' => 'check', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
        'CreatePartnerResultShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
            ],
        ],
        'SetUserGraceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SetUserGraceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetUserGraceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'SetUserGraceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'GetUserGraceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetUserGraceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetUserGraceResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'GetUserGraceResultShape' => [
            'type' => 'structure',
            'members' => [
                'periodResGraceDays' => [ 'type' => 'integer', 'locationName' => 'periodResGraceDays', ],
                'periodResRetentionDays' => [ 'type' => 'integer', 'locationName' => 'periodResRetentionDays', ],
                'onDemandResGraceDays' => [ 'type' => 'integer', 'locationName' => 'onDemandResGraceDays', ],
            ],
        ],
        'PartnerTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'partnerToken' =>  [ 'shape' => 'PartnerToken', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
            ],
        ],
        'PartnerTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'token' => [ 'type' => 'string', 'locationName' => 'token', ],
                'tokenOriginResult' => [ 'type' => 'string', 'locationName' => 'tokenOriginResult', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
                'tokenType' => [ 'type' => 'integer', 'locationName' => 'tokenType', ],
                'expiresAt' => [ 'type' => 'string', 'locationName' => 'expiresAt', ],
                'issuedAt' => [ 'type' => 'string', 'locationName' => 'issuedAt', ],
            ],
        ],
        'PartnerStsTokenResultShape' => [
            'type' => 'structure',
            'members' => [
                'access' => [ 'type' => 'string', 'locationName' => 'access', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'securitytoken' => [ 'type' => 'string', 'locationName' => 'securitytoken', ],
                'expiresAt' => [ 'type' => 'string', 'locationName' => 'expiresAt', ],
                'issuedAt' => [ 'type' => 'string', 'locationName' => 'issuedAt', ],
            ],
        ],
        'PartnerTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PartnerTokenResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PartnerStsTokenRequestShape' => [
            'type' => 'structure',
            'members' => [
                'partnerStsToken' =>  [ 'shape' => 'PartnerStsToken', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
            ],
        ],
        'PartnerStsTokenResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'PartnerStsTokenResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'CheckUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'checkUserInfo' =>  [ 'shape' => 'CheckUserInfo', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
            ],
        ],
        'ListPartnerUsersResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'users' => [ 'type' => 'list', 'member' => [ 'shape' => 'PartnerUserInfo', ], ],
            ],
        ],
        'CreateUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
                'roleJrn' => [ 'type' => 'string', 'locationName' => 'roleJrn', ],
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretkey' => [ 'type' => 'string', 'locationName' => 'secretkey', ],
            ],
        ],
        'ListPartnerUsersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListPartnerUsersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SendVerificationCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListPartnerUsersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'mobilePhone' => [ 'type' => 'string', 'locationName' => 'mobilePhone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'cooperationStartTime' => [ 'type' => 'string', 'locationName' => 'cooperationStartTime', ],
                'cooperationEndTime' => [ 'type' => 'string', 'locationName' => 'cooperationEndTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'sort' => [ 'type' => 'integer', 'locationName' => 'sort', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
            ],
        ],
        'SendVerificationCodeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SendVerificationCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sendVerificationCodeInfo' =>  [ 'shape' => 'SendVerificationCodeInfo', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
            ],
        ],
        'CreateUserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createUserInfo' =>  [ 'shape' => 'CreateUserInfo', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
            ],
        ],
        'CreateUserAuthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserAuthResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateUserAuthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userAuthInfo' =>  [ 'shape' => 'UserAuthInfo', ],
                'partnerId' => [ 'type' => 'string', 'locationName' => 'partnerId', ],
                'userId' => [ 'type' => 'string', 'locationName' => 'userId', ],
            ],
        ],
    ],
];
