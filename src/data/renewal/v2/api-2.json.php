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
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'billingType' => [ 'type' => 'string', 'locationName' => 'billingType', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'lastTime' => [ 'type' => 'integer', 'locationName' => 'lastTime', ],
                'autoRenewStatus' => [ 'type' => 'string', 'locationName' => 'autoRenewStatus', ],
                'autoRenewPeriod' => [ 'type' => 'string', 'locationName' => 'autoRenewPeriod', ],
                'associateResource' => [ 'type' => 'string', 'locationName' => 'associateResource', ],
                'extendField' => [ 'type' => 'string', 'locationName' => 'extendField', ],
                'relationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RelationResource', ], ],
            ],
        ],
        'RelationResource' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'billingType' => [ 'type' => 'string', 'locationName' => 'billingType', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'lastTime' => [ 'type' => 'integer', 'locationName' => 'lastTime', ],
                'autoRenewStatus' => [ 'type' => 'string', 'locationName' => 'autoRenewStatus', ],
                'extendField' => [ 'type' => 'string', 'locationName' => 'extendField', ],
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
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'renewStatus' => [ 'type' => 'string', 'locationName' => 'renewStatus', ],
                'billingType' => [ 'type' => 'string', 'locationName' => 'billingType', ],
                'expireType' => [ 'type' => 'string', 'locationName' => 'expireType', ],
                'ipAddress' => [ 'type' => 'string', 'locationName' => 'ipAddress', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'RenewInstanceParam' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'instanceIds' => [ 'type' => 'string', 'locationName' => 'instanceIds', ],
                'unifyDate' => [ 'type' => 'string', 'locationName' => 'unifyDate', ],
                'autoPay' => [ 'type' => 'boolean', 'locationName' => 'autoPay', ],
                'returnURL' => [ 'type' => 'string', 'locationName' => 'returnURL', ],
            ],
        ],
        'SetExpiredRenewParam' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceIds' => [ 'type' => 'string', 'locationName' => 'resourceIds', ],
                'renewStatus' => [ 'type' => 'string', 'locationName' => 'renewStatus', ],
                'relationStatus' => [ 'type' => 'string', 'locationName' => 'relationStatus', ],
            ],
        ],
        'SetRenewalParam' => [
            'type' => 'structure',
            'members' => [
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'instanceIds' => [ 'type' => 'string', 'locationName' => 'instanceIds', ],
                'autoRenewStatus' => [ 'type' => 'string', 'locationName' => 'autoRenewStatus', ],
                'allAutoPay' => [ 'type' => 'string', 'locationName' => 'allAutoPay', ],
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
