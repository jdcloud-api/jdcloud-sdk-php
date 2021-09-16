<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'clouddnsservice',
        'protocol' => 'json',
//        'serviceFullName' => 'clouddnsservice',
//        'serviceId' => 'clouddnsservice',
    ],
    'operations' => [
        'GetActionLog' => [
            'name' => 'GetActionLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/log/actionLog',
            ],
            'input' => [ 'shape' => 'GetActionLogRequestShape', ],
            'output' => [ 'shape' => 'GetActionLogResponseShape', ],
        ],
        'GetDomains' => [
            'name' => 'GetDomains',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain',
            ],
            'input' => [ 'shape' => 'GetDomainsRequestShape', ],
            'output' => [ 'shape' => 'GetDomainsResponseShape', ],
        ],
        'AddDomain' => [
            'name' => 'AddDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domainAdd',
            ],
            'input' => [ 'shape' => 'AddDomainRequestShape', ],
            'output' => [ 'shape' => 'AddDomainResponseShape', ],
        ],
        'DelDomain' => [
            'name' => 'DelDomain',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/domainDel',
            ],
            'input' => [ 'shape' => 'DelDomainRequestShape', ],
            'output' => [ 'shape' => 'DelDomainResponseShape', ],
        ],
        'UpdateDomain' => [
            'name' => 'UpdateDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domainUpdate',
            ],
            'input' => [ 'shape' => 'UpdateDomainRequestShape', ],
            'output' => [ 'shape' => 'UpdateDomainResponseShape', ],
        ],
        'GetDomainQueryCount' => [
            'name' => 'GetDomainQueryCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/queryCount',
            ],
            'input' => [ 'shape' => 'GetDomainQueryCountRequestShape', ],
            'output' => [ 'shape' => 'GetDomainQueryCountResponseShape', ],
        ],
        'GetDomainQueryTraffic' => [
            'name' => 'GetDomainQueryTraffic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/queryTraffic',
            ],
            'input' => [ 'shape' => 'GetDomainQueryTrafficRequestShape', ],
            'output' => [ 'shape' => 'GetDomainQueryTrafficResponseShape', ],
        ],
        'SearchRR' => [
            'name' => 'SearchRR',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/RR',
            ],
            'input' => [ 'shape' => 'SearchRRRequestShape', ],
            'output' => [ 'shape' => 'SearchRRResponseShape', ],
        ],
        'GetViewTree' => [
            'name' => 'GetViewTree',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/viewTree',
            ],
            'input' => [ 'shape' => 'GetViewTreeRequestShape', ],
            'output' => [ 'shape' => 'GetViewTreeResponseShape', ],
        ],
        'AddRR' => [
            'name' => 'AddRR',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/RRAdd',
            ],
            'input' => [ 'shape' => 'AddRRRequestShape', ],
            'output' => [ 'shape' => 'AddRRResponseShape', ],
        ],
        'UpdateRR' => [
            'name' => 'UpdateRR',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/RRUpdate',
            ],
            'input' => [ 'shape' => 'UpdateRRRequestShape', ],
            'output' => [ 'shape' => 'UpdateRRResponseShape', ],
        ],
        'OperateRR' => [
            'name' => 'OperateRR',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/RROperate',
            ],
            'input' => [ 'shape' => 'OperateRRRequestShape', ],
            'output' => [ 'shape' => 'OperateRRResponseShape', ],
        ],
        'BatchSetDnsResolve' => [
            'name' => 'BatchSetDnsResolve',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/BatchSetDnsResolve',
            ],
            'input' => [ 'shape' => 'BatchSetDnsResolveRequestShape', ],
            'output' => [ 'shape' => 'BatchSetDnsResolveResponseShape', ],
        ],
        'AddUserView' => [
            'name' => 'AddUserView',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/userview/addUserView',
            ],
            'input' => [ 'shape' => 'AddUserViewRequestShape', ],
            'output' => [ 'shape' => 'AddUserViewResponseShape', ],
        ],
        'DelUserView' => [
            'name' => 'DelUserView',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/userview/delUserView',
            ],
            'input' => [ 'shape' => 'DelUserViewRequestShape', ],
            'output' => [ 'shape' => 'DelUserViewResponseShape', ],
        ],
        'GetUserView' => [
            'name' => 'GetUserView',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/userview/getUserView',
            ],
            'input' => [ 'shape' => 'GetUserViewRequestShape', ],
            'output' => [ 'shape' => 'GetUserViewResponseShape', ],
        ],
        'AddUserViewIP' => [
            'name' => 'AddUserViewIP',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/userview/addUserViewIP',
            ],
            'input' => [ 'shape' => 'AddUserViewIPRequestShape', ],
            'output' => [ 'shape' => 'AddUserViewIPResponseShape', ],
        ],
        'DelUserViewIP' => [
            'name' => 'DelUserViewIP',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/userview/delUserViewIP',
            ],
            'input' => [ 'shape' => 'DelUserViewIPRequestShape', ],
            'output' => [ 'shape' => 'DelUserViewIPResponseShape', ],
        ],
        'GetUserViewIP' => [
            'name' => 'GetUserViewIP',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/userview/getUserViewIP',
            ],
            'input' => [ 'shape' => 'GetUserViewIPRequestShape', ],
            'output' => [ 'shape' => 'GetUserViewIPResponseShape', ],
        ],
        'GetMonitor' => [
            'name' => 'GetMonitor',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/monitor',
            ],
            'input' => [ 'shape' => 'GetMonitorRequestShape', ],
            'output' => [ 'shape' => 'GetMonitorResponseShape', ],
        ],
        'AddMonitor' => [
            'name' => 'AddMonitor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/monitorAdd',
            ],
            'input' => [ 'shape' => 'AddMonitorRequestShape', ],
            'output' => [ 'shape' => 'AddMonitorResponseShape', ],
        ],
        'GetTargets' => [
            'name' => 'GetTargets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/getTargets',
            ],
            'input' => [ 'shape' => 'GetTargetsRequestShape', ],
            'output' => [ 'shape' => 'GetTargetsResponseShape', ],
        ],
        'AddMonitorTarget' => [
            'name' => 'AddMonitorTarget',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/monitorAddTarget',
            ],
            'input' => [ 'shape' => 'AddMonitorTargetRequestShape', ],
            'output' => [ 'shape' => 'AddMonitorTargetResponseShape', ],
        ],
        'OperateMonitor' => [
            'name' => 'OperateMonitor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/monitorOperate',
            ],
            'input' => [ 'shape' => 'OperateMonitorRequestShape', ],
            'output' => [ 'shape' => 'OperateMonitorResponseShape', ],
        ],
        'UpdateMonitor' => [
            'name' => 'UpdateMonitor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/monitorUpdate',
            ],
            'input' => [ 'shape' => 'UpdateMonitorRequestShape', ],
            'output' => [ 'shape' => 'UpdateMonitorResponseShape', ],
        ],
        'GetMonitorAlarmInfo' => [
            'name' => 'GetMonitorAlarmInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/domain/{domainId}/monitor/alarminfo',
            ],
            'input' => [ 'shape' => 'GetMonitorAlarmInfoRequestShape', ],
            'output' => [ 'shape' => 'GetMonitorAlarmInfoResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
