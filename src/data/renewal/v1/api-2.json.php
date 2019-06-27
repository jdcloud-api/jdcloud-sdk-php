<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'renewal',
        'protocol' => 'json',
//        'serviceFullName' => 'renewal',
//        'serviceId' => 'renewal',
    ],
    'operations' => [
        'SetRenewal' => [
            'name' => 'SetRenewal',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/instances:autoRenewStatus',
            ],
            'input' => [ 'shape' => 'SetRenewalRequestShape', ],
            'output' => [ 'shape' => 'SetRenewalResponseShape', ],
        ],
        'QueryInstance' => [
            'name' => 'QueryInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'QueryInstanceRequestShape', ],
            'output' => [ 'shape' => 'QueryInstanceResponseShape', ],
        ],
        'RenewInstance' => [
            'name' => 'RenewInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/instances:renew',
            ],
            'input' => [ 'shape' => 'RenewInstanceRequestShape', ],
            'output' => [ 'shape' => 'RenewInstanceResponseShape', ],
        ],
    ],
    'shapes' => [
        'ListQuery' => [
            'type' => 'structure',
            'members' => [
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'lastTime' => [ 'type' => 'integer', 'locationName' => 'lastTime', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'autoRenew' => [ 'type' => 'integer', 'locationName' => 'autoRenew', ],
                'associateResource' => [ 'type' => 'integer', 'locationName' => 'associateResource', ],
                'renewTime' => [ 'type' => 'integer', 'locationName' => 'renewTime', ],
                'databaseType' => [ 'type' => 'string', 'locationName' => 'databaseType', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'relationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RelationResource', ], ],
            ],
        ],
        'RelationResource' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'dataCenter' => [ 'type' => 'string', 'locationName' => 'dataCenter', ],
                'autoRenew' => [ 'type' => 'integer', 'locationName' => 'autoRenew', ],
                'lastTime' => [ 'type' => 'integer', 'locationName' => 'lastTime', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'QueryExpiredResourceParam' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'serviceCodes' => [ 'type' => 'string', 'locationName' => 'serviceCodes', ],
                'expireType' => [ 'type' => 'integer', 'locationName' => 'expireType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'QueryExpiredResourceResultVo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'expiredDays' => [ 'type' => 'integer', 'locationName' => 'expiredDays', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
            ],
        ],
        'QueryInstanceParam' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'renewStatus' => [ 'type' => 'integer', 'locationName' => 'renewStatus', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'billingType' => [ 'type' => 'string', 'locationName' => 'billingType', ],
            ],
        ],
        'RenewInstanceParam' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'sign' => [ 'type' => 'string', 'locationName' => 'sign', ],
                'instanceIds' => [ 'type' => 'string', 'locationName' => 'instanceIds', ],
                'unifyDate' => [ 'type' => 'integer', 'locationName' => 'unifyDate', ],
                'returnURL' => [ 'type' => 'string', 'locationName' => 'returnURL', ],
            ],
        ],
        'SetRenewalParam' => [
            'type' => 'structure',
            'members' => [
                'instanceIds' => [ 'type' => 'string', 'locationName' => 'instanceIds', ],
                'autoRenewStatus' => [ 'type' => 'integer', 'locationName' => 'autoRenewStatus', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'allAutoPay' => [ 'type' => 'integer', 'locationName' => 'allAutoPay', ],
            ],
        ],
        'QueryInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'listQueries' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListQuery', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ResourceMapResult' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryExpiredResourceResultVo', ], ],
                'totalNumber' => [ 'type' => 'integer', 'locationName' => 'totalNumber', ],
                'resourceIdList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryInstanceParam' =>  [ 'shape' => 'QueryInstanceParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetRenewalResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SetRenewalResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RenewInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'renewInstanceParam' =>  [ 'shape' => 'RenewInstanceParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'RenewInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderNumber' => [ 'type' => 'string', 'locationName' => 'orderNumber', ],
            ],
        ],
        'RenewInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RenewInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetRenewalRequestShape' => [
            'type' => 'structure',
            'members' => [
                'setRenewalParam' =>  [ 'shape' => 'SetRenewalParam', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'SetRenewalResultShape' => [
            'type' => 'structure',
            'members' => [
                'stringResult' => [ 'type' => 'string', 'locationName' => 'stringResult', ],
            ],
        ],
    ],
];
