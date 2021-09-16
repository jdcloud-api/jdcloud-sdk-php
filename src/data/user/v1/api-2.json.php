<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'user',
        'protocol' => 'json',
//        'serviceFullName' => 'user',
//        'serviceId' => 'user',
    ],
    'operations' => [
        'DescribeUser' => [
            'name' => 'DescribeUser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeUser',
            ],
            'input' => [ 'shape' => 'DescribeUserRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserResponseShape', ],
        ],
    ],
    'shapes' => [
        'AzMappingVo' => [
            'type' => 'structure',
            'members' => [
                'laz' => [ 'type' => 'string', 'locationName' => 'laz', ],
                'paz' => [ 'type' => 'string', 'locationName' => 'paz', ],
            ],
        ],
        'CookieInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CheckCredentialInfo' => [
            'type' => 'structure',
            'members' => [
                'cookies' => [ 'type' => 'list', 'member' => [ 'shape' => 'CookieInfo', ], ],
            ],
        ],
        'ContactGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
                'yn' => [ 'type' => 'integer', 'locationName' => 'yn', ],
            ],
        ],
        'ContactPerson' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'emailValid' => [ 'type' => 'integer', 'locationName' => 'emailValid', ],
                'isMain' => [ 'type' => 'integer', 'locationName' => 'isMain', ],
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
                'yn' => [ 'type' => 'integer', 'locationName' => 'yn', ],
                'isSelf' => [ 'type' => 'integer', 'locationName' => 'isSelf', ],
            ],
        ],
        'ContactPersonGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'personId' => [ 'type' => 'long', 'locationName' => 'personId', ],
                'groupId' => [ 'type' => 'long', 'locationName' => 'groupId', ],
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
                'yn' => [ 'type' => 'integer', 'locationName' => 'yn', ],
                'isSelf' => [ 'type' => 'integer', 'locationName' => 'isSelf', ],
            ],
        ],
        'ContactPersonInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'emailVerified' => [ 'type' => 'boolean', 'locationName' => 'emailVerified', ],
                'isPrimary' => [ 'type' => 'boolean', 'locationName' => 'isPrimary', ],
                'isOwner' => [ 'type' => 'boolean', 'locationName' => 'isOwner', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'modifiedTime' => [ 'type' => 'string', 'locationName' => 'modifiedTime', ],
            ],
        ],
        'ControlManagementSummary' => [
            'type' => 'structure',
            'members' => [
                'subUserCount' => [ 'type' => 'integer', 'locationName' => 'subUserCount', ],
                'groupCount' => [ 'type' => 'integer', 'locationName' => 'groupCount', ],
                'policyCount' => [ 'type' => 'integer', 'locationName' => 'policyCount', ],
                'roleCount' => [ 'type' => 'integer', 'locationName' => 'roleCount', ],
                'idPCount' => [ 'type' => 'integer', 'locationName' => 'idPCount', ],
                'orgLoginUrl' => [ 'type' => 'string', 'locationName' => 'orgLoginUrl', ],
                'subUserLoginUrl' => [ 'type' => 'string', 'locationName' => 'subUserLoginUrl', ],
            ],
        ],
        'CredentialInfo' => [
            'type' => 'structure',
            'members' => [
                'accessKey' => [ 'type' => 'string', 'locationName' => 'accessKey', ],
                'secretKey' => [ 'type' => 'string', 'locationName' => 'secretKey', ],
                'sessionToken' => [ 'type' => 'string', 'locationName' => 'sessionToken', ],
                'expiration' => [ 'type' => 'string', 'locationName' => 'expiration', ],
                'rolePin' => [ 'type' => 'string', 'locationName' => 'rolePin', ],
            ],
        ],
        'EdgeZoneMappingInfo' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'lAz' => [ 'type' => 'string', 'locationName' => 'lAz', ],
                'pAz' => [ 'type' => 'string', 'locationName' => 'pAz', ],
            ],
        ],
        'Flags' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
            ],
        ],
        'GlobalAzMappingVo' => [
            'type' => 'structure',
            'members' => [
                'alias' => [ 'type' => 'string', 'locationName' => 'alias', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'mapping' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzMappingVo', ], ],
            ],
        ],
        'LoginInfo' => [
            'type' => 'structure',
            'members' => [
                'loginType' => [ 'type' => 'integer', 'locationName' => 'loginType', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'adminPin' => [ 'type' => 'string', 'locationName' => 'adminPin', ],
                'credentialInfo' =>  [ 'shape' => 'CredentialInfo', ],
                'loginUrl' => [ 'type' => 'string', 'locationName' => 'loginUrl', ],
                'loginName' => [ 'type' => 'string', 'locationName' => 'loginName', ],
            ],
        ],
        'OrganizationInfo' => [
            'type' => 'structure',
            'members' => [
                'organizationCode' => [ 'type' => 'string', 'locationName' => 'organizationCode', ],
                'organizationName' => [ 'type' => 'string', 'locationName' => 'organizationName', ],
                'organizationFullPath' => [ 'type' => 'string', 'locationName' => 'organizationFullPath', ],
                'organizationFullname' => [ 'type' => 'string', 'locationName' => 'organizationFullname', ],
                'organizationLevel' => [ 'type' => 'string', 'locationName' => 'organizationLevel', ],
            ],
        ],
        'SensitiveInfo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'phone' => [ 'type' => 'string', 'locationName' => 'phone', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'TransReqVo' => [
            'type' => 'structure',
            'members' => [
                'sourceErp' => [ 'type' => 'string', 'locationName' => 'sourceErp', ],
                'targetErp' => [ 'type' => 'string', 'locationName' => 'targetErp', ],
                'itemId' => [ 'type' => 'string', 'locationName' => 'itemId', ],
                'itemName' => [ 'type' => 'string', 'locationName' => 'itemName', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'signature' => [ 'type' => 'string', 'locationName' => 'signature', ],
            ],
        ],
        'TransResourceVo' => [
            'type' => 'structure',
            'members' => [
                'systemName' => [ 'type' => 'string', 'locationName' => 'systemName', ],
                'itemId' => [ 'type' => 'string', 'locationName' => 'itemId', ],
                'itemName' => [ 'type' => 'string', 'locationName' => 'itemName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'addition' => [ 'type' => 'string', 'locationName' => 'addition', ],
            ],
        ],
        'UserAttachment' => [
            'type' => 'structure',
            'members' => [
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'industry' => [ 'type' => 'string', 'locationName' => 'industry', ],
                'subIndustry' => [ 'type' => 'string', 'locationName' => 'subIndustry', ],
                'business' => [ 'type' => 'string', 'locationName' => 'business', ],
                'website' => [ 'type' => 'string', 'locationName' => 'website', ],
                'cpState' => [ 'type' => 'string', 'locationName' => 'cpState', ],
                'cpProvince' => [ 'type' => 'string', 'locationName' => 'cpProvince', ],
                'cpCity' => [ 'type' => 'string', 'locationName' => 'cpCity', ],
                'cpCountry' => [ 'type' => 'string', 'locationName' => 'cpCountry', ],
                'cpAddress' => [ 'type' => 'string', 'locationName' => 'cpAddress', ],
                'cpTelphone' => [ 'type' => 'string', 'locationName' => 'cpTelphone', ],
            ],
        ],
        'UserReportProperty' => [
            'type' => 'structure',
            'members' => [
                'affiliation' => [ 'type' => 'string', 'locationName' => 'affiliation', ],
                'affiliationIndex' => [ 'type' => 'integer', 'locationName' => 'affiliationIndex', ],
                'enterpriseAffiliation' => [ 'type' => 'string', 'locationName' => 'enterpriseAffiliation', ],
                'enterpriseAffiliationIndex' => [ 'type' => 'integer', 'locationName' => 'enterpriseAffiliationIndex', ],
                'businessLine' => [ 'type' => 'string', 'locationName' => 'businessLine', ],
                'businessLineIndex' => [ 'type' => 'integer', 'locationName' => 'businessLineIndex', ],
                'userGroup' => [ 'type' => 'string', 'locationName' => 'userGroup', ],
                'userGroupIndex' => [ 'type' => 'integer', 'locationName' => 'userGroupIndex', ],
                'serviceType' => [ 'type' => 'string', 'locationName' => 'serviceType', ],
                'deptCode' => [ 'type' => 'string', 'locationName' => 'deptCode', ],
                'deptName' => [ 'type' => 'string', 'locationName' => 'deptName', ],
            ],
        ],
        'UserReportVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'affiliation' => [ 'type' => 'string', 'locationName' => 'affiliation', ],
                'contacts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserReqVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'cscPhone' => [ 'type' => 'string', 'locationName' => 'cscPhone', ],
                'cscEmail' => [ 'type' => 'string', 'locationName' => 'cscEmail', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'createTimeStart' => [ 'type' => 'string', 'locationName' => 'createTimeStart', ],
                'createTimeEnd' => [ 'type' => 'string', 'locationName' => 'createTimeEnd', ],
                'arrearageStatus' => [ 'type' => 'integer', 'locationName' => 'arrearageStatus', ],
                'groups' => [ 'type' => 'string', 'locationName' => 'groups', ],
                'group' => [ 'type' => 'integer', 'locationName' => 'group', ],
                'billingWhite' => [ 'type' => 'integer', 'locationName' => 'billingWhite', ],
                'tag' => [ 'type' => 'integer', 'locationName' => 'tag', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'currentPage' => [ 'type' => 'integer', 'locationName' => 'currentPage', ],
            ],
        ],
        'UserResVo' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'cscPhone' => [ 'type' => 'string', 'locationName' => 'cscPhone', ],
                'cscEmail' => [ 'type' => 'string', 'locationName' => 'cscEmail', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'userType' => [ 'type' => 'integer', 'locationName' => 'userType', ],
                'companyName' => [ 'type' => 'string', 'locationName' => 'companyName', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'arrearageTime' => [ 'type' => 'string', 'locationName' => 'arrearageTime', ],
                'userTagObject' =>  [ 'shape' => 'Flags', ],
                'attachment' =>  [ 'shape' => 'UserAttachment', ],
            ],
        ],
        'UserResourceTypeInfo' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'UserSellerVo' => [
            'type' => 'structure',
            'members' => [
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'dept' => [ 'type' => 'string', 'locationName' => 'dept', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
            ],
        ],
        'DescribeUserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUserResultShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'loginName' => [ 'type' => 'string', 'locationName' => 'loginName', ],
                'accountId' => [ 'type' => 'string', 'locationName' => 'accountId', ],
                'userAuth' => [ 'type' => 'integer', 'locationName' => 'userAuth', ],
            ],
        ],
        'DescribeUserRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
