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
        'Actionlog' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
                'time' => [ 'type' => 'long', 'locationName' => 'time', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'failReason' => [ 'type' => 'string', 'locationName' => 'failReason', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
            ],
        ],
        'DomainAdded' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'expirationDate' => [ 'type' => 'long', 'locationName' => 'expirationDate', ],
                'packId' => [ 'type' => 'integer', 'locationName' => 'packId', ],
            ],
        ],
        'Domain' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'expirationDate' => [ 'type' => 'long', 'locationName' => 'expirationDate', ],
                'packId' => [ 'type' => 'integer', 'locationName' => 'packId', ],
                'lockStatus' => [ 'type' => 'integer', 'locationName' => 'lockStatus', ],
            ],
        ],
        'DomainInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'expirationDate' => [ 'type' => 'long', 'locationName' => 'expirationDate', ],
                'packId' => [ 'type' => 'integer', 'locationName' => 'packId', ],
                'packName' => [ 'type' => 'string', 'locationName' => 'packName', ],
                'resolvingStatus' => [ 'type' => 'string', 'locationName' => 'resolvingStatus', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'jcloudNs' => [ 'type' => 'boolean', 'locationName' => 'jcloudNs', ],
                'lockStatus' => [ 'type' => 'integer', 'locationName' => 'lockStatus', ],
            ],
        ],
        'Notice' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'A' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'Result' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'NS' => [
            'type' => 'structure',
            'members' => [
                'tag' => [ 'type' => 'integer', 'locationName' => 'tag', ],
                'server' => [ 'type' => 'string', 'locationName' => 'server', ],
            ],
        ],
        'Monitor' => [
            'type' => 'structure',
            'members' => [
                'alarmLimit' => [ 'type' => 'integer', 'locationName' => 'alarmLimit', ],
                'canRecover' => [ 'type' => 'boolean', 'locationName' => 'canRecover', ],
                'canSwitch' => [ 'type' => 'boolean', 'locationName' => 'canSwitch', ],
                'clusters' => [ 'type' => 'string', 'locationName' => 'clusters', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'hostStatus' => [ 'type' => 'integer', 'locationName' => 'hostStatus', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ipBackup01' => [ 'type' => 'string', 'locationName' => 'ipBackup01', ],
                'ipBackup01Status' => [ 'type' => 'integer', 'locationName' => 'ipBackup01Status', ],
                'ipBackup01Type' => [ 'type' => 'integer', 'locationName' => 'ipBackup01Type', ],
                'ipBackup02' => [ 'type' => 'string', 'locationName' => 'ipBackup02', ],
                'ipBackup02Status' => [ 'type' => 'integer', 'locationName' => 'ipBackup02Status', ],
                'ipBackup02Type' => [ 'type' => 'integer', 'locationName' => 'ipBackup02Type', ],
                'manualBackup' => [ 'type' => 'string', 'locationName' => 'manualBackup', ],
                'manualBackupStatus' => [ 'type' => 'integer', 'locationName' => 'manualBackupStatus', ],
                'manualBackupType' => [ 'type' => 'integer', 'locationName' => 'manualBackupType', ],
                'monitorEnable' => [ 'type' => 'integer', 'locationName' => 'monitorEnable', ],
                'monitorFreq' => [ 'type' => 'integer', 'locationName' => 'monitorFreq', ],
                'monitorPort' => [ 'type' => 'integer', 'locationName' => 'monitorPort', ],
                'monitorRule' => [ 'type' => 'integer', 'locationName' => 'monitorRule', ],
                'monitorUri' => [ 'type' => 'string', 'locationName' => 'monitorUri', ],
                'notifyEmail' => [ 'type' => 'string', 'locationName' => 'notifyEmail', ],
                'notifyEmailEnable' => [ 'type' => 'integer', 'locationName' => 'notifyEmailEnable', ],
                'notifyMsgBarEnable' => [ 'type' => 'integer', 'locationName' => 'notifyMsgBarEnable', ],
                'notifySms' => [ 'type' => 'string', 'locationName' => 'notifySms', ],
                'notifySmsEnable' => [ 'type' => 'integer', 'locationName' => 'notifySmsEnable', ],
                'protocol' => [ 'type' => 'integer', 'locationName' => 'protocol', ],
                'stopRecoverRule' => [ 'type' => 'integer', 'locationName' => 'stopRecoverRule', ],
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'switchRecoverRule' => [ 'type' => 'integer', 'locationName' => 'switchRecoverRule', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'usedType' => [ 'type' => 'integer', 'locationName' => 'usedType', ],
            ],
        ],
        'UpdateMonitor' => [
            'type' => 'structure',
            'members' => [
                'alarmLimit' => [ 'type' => 'integer', 'locationName' => 'alarmLimit', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ipBackup01' => [ 'type' => 'string', 'locationName' => 'ipBackup01', ],
                'ipBackup02' => [ 'type' => 'string', 'locationName' => 'ipBackup02', ],
                'monitorEnable' => [ 'type' => 'integer', 'locationName' => 'monitorEnable', ],
                'monitorFreq' => [ 'type' => 'integer', 'locationName' => 'monitorFreq', ],
                'monitorPort' => [ 'type' => 'integer', 'locationName' => 'monitorPort', ],
                'monitorRule' => [ 'type' => 'integer', 'locationName' => 'monitorRule', ],
                'monitorUri' => [ 'type' => 'string', 'locationName' => 'monitorUri', ],
                'notifyEmailEnable' => [ 'type' => 'integer', 'locationName' => 'notifyEmailEnable', ],
                'notifyMsgBarEnable' => [ 'type' => 'integer', 'locationName' => 'notifyMsgBarEnable', ],
                'notifySmsEnable' => [ 'type' => 'integer', 'locationName' => 'notifySmsEnable', ],
                'protocol' => [ 'type' => 'integer', 'locationName' => 'protocol', ],
                'stopRecoverRule' => [ 'type' => 'integer', 'locationName' => 'stopRecoverRule', ],
                'switchRecoverRule' => [ 'type' => 'integer', 'locationName' => 'switchRecoverRule', ],
            ],
        ],
        'MonitorAlarmInfo' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
            ],
        ],
        'UpdateRR' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'jcloudRes' => [ 'type' => 'boolean', 'locationName' => 'jcloudRes', ],
                'mxPriority' => [ 'type' => 'integer', 'locationName' => 'mxPriority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'viewValue' => [ 'type' => 'integer', 'locationName' => 'viewValue', ],
            ],
        ],
        'RR' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'jcloudRes' => [ 'type' => 'boolean', 'locationName' => 'jcloudRes', ],
                'mxPriority' => [ 'type' => 'integer', 'locationName' => 'mxPriority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'viewValue' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'Setalb' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
            ],
        ],
        'Getalb' => [
            'type' => 'structure',
            'members' => [
                'balance' => [ 'type' => 'boolean', 'locationName' => 'balance', ],
                'record' => [ 'type' => 'string', 'locationName' => 'record', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'viewValue' => [ 'type' => 'integer', 'locationName' => 'viewValue', ],
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostRRlb', ], ],
            ],
        ],
        'AddRR' => [
            'type' => 'structure',
            'members' => [
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'jcloudRes' => [ 'type' => 'boolean', 'locationName' => 'jcloudRes', ],
                'mxPriority' => [ 'type' => 'integer', 'locationName' => 'mxPriority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'viewValue' => [ 'type' => 'integer', 'locationName' => 'viewValue', ],
            ],
        ],
        'RRInfo' => [
            'type' => 'structure',
            'members' => [
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'jcloudRes' => [ 'type' => 'boolean', 'locationName' => 'jcloudRes', ],
                'mxPriority' => [ 'type' => 'integer', 'locationName' => 'mxPriority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'viewValue' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'resolvingStatus' => [ 'type' => 'string', 'locationName' => 'resolvingStatus', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
            ],
        ],
        'Getlb' => [
            'type' => 'structure',
            'members' => [
                'balance' => [ 'type' => 'boolean', 'locationName' => 'balance', ],
                'record' => [ 'type' => 'string', 'locationName' => 'record', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'viewValue' => [ 'type' => 'integer', 'locationName' => 'viewValue', ],
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostRRlb', ], ],
            ],
        ],
        'BatchSetDNS' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jcloudRes' => [ 'type' => 'boolean', 'locationName' => 'jcloudRes', ],
                'mxPriority' => [ 'type' => 'integer', 'locationName' => 'mxPriority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'viewValue' => [ 'type' => 'integer', 'locationName' => 'viewValue', ],
            ],
        ],
        'SetRR' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SetRecords', ], ],
            ],
        ],
        'Setlb' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
            ],
        ],
        'ImportDNS' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'jcloudRes' => [ 'type' => 'boolean', 'locationName' => 'jcloudRes', ],
                'mxPriority' => [ 'type' => 'integer', 'locationName' => 'mxPriority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'viewValue' => [ 'type' => 'integer', 'locationName' => 'viewValue', ],
            ],
        ],
        'Jdvpc' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'binded' => [ 'type' => 'boolean', 'locationName' => 'binded', ],
            ],
        ],
        'ViewTree' => [
            'type' => 'structure',
            'members' => [
                'disabled' => [ 'type' => 'boolean', 'locationName' => 'disabled', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'leaf' => [ 'type' => 'boolean', 'locationName' => 'leaf', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'ViewTree', ], ],
            ],
        ],
        'HostRRlb' => [
            'type' => 'structure',
            'members' => [
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'rate' => [ 'type' => 'double', 'locationName' => 'rate', ],
            ],
        ],
        'SetRecords' => [
            'type' => 'structure',
            'members' => [
                'records' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'views' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'SubDomainExist' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'isExist' => [ 'type' => 'integer', 'locationName' => 'isExist', ],
            ],
        ],
        'UserViewInput' => [
            'type' => 'structure',
            'members' => [
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'ipRanges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'isDelete' => [ 'type' => 'integer', 'locationName' => 'isDelete', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updator' => [ 'type' => 'string', 'locationName' => 'updator', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'DelView' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
            ],
        ],
        'DelViewIP' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'ipRanges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AddView' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'ipRanges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Userview' => [
            'type' => 'structure',
            'members' => [
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'isDelete' => [ 'type' => 'integer', 'locationName' => 'isDelete', ],
                'creator' => [ 'type' => 'string', 'locationName' => 'creator', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'updator' => [ 'type' => 'string', 'locationName' => 'updator', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'AddViewIP' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'ipRanges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetActionLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Actionlog', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'GetActionLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'keyWord' => [ 'type' => 'string', 'locationName' => 'keyWord', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetActionLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetActionLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainQueryCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainQueryCountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainQueryTrafficResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'traffic' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
            ],
        ],
        'DelDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDomainQueryTrafficResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainQueryTrafficResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DelDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Domain', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'GetDomainQueryTrafficRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DelDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainQueryCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'AddDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'packId' => [ 'type' => 'integer', 'locationName' => 'packId', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDomainQueryCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'traffic' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'UpdateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DomainAdded', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
            ],
        ],
        'UpdateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OperateRRResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BatchSetDnsResolveResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateRRRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'UpdateRR', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'SearchRRRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'GetViewTreeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'loadMode' => [ 'type' => 'integer', 'locationName' => 'loadMode', ],
                'packId' => [ 'type' => 'integer', 'locationName' => 'packId', ],
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'UpdateRRResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetViewTreeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetViewTreeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddRRResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' =>  [ 'shape' => 'RR', ],
            ],
        ],
        'AddRRRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddRR', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'OperateRRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetViewTreeResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ViewTree', ], ],
            ],
        ],
        'SearchRRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SearchRRResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchSetDnsResolveResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchSetDnsResolveResultShape', ],
            ],
        ],
        'OperateRRRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'AddRRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddRRResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SearchRRResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RR', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
            ],
        ],
        'UpdateRRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchSetDnsResolveRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchSetDNS', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetUserViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DelUserViewResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddUserViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddUserViewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddUserViewIPResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelUserViewIPResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelUserViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelView', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddUserViewIPResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetUserViewIPResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DelUserViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddUserViewIPRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddViewIP', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetUserViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetUserViewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddUserViewResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Userview', ],
            ],
        ],
        'DelUserViewIPRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelViewIP', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DelUserViewIPResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetUserViewIPResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetUserViewIPResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetUserViewResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserViewInput', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'AddUserViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddView', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetUserViewIPRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddMonitorTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTargetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'GetMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Monitor', ], ],
            ],
        ],
        'GetMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMonitorResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateMonitor' =>  [ 'shape' => 'UpdateMonitor', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'GetMonitorAlarmInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMonitorAlarmInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'OperateMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddMonitorTargetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OperateMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'switchTarget' => [ 'type' => 'string', 'locationName' => 'switchTarget', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'GetMonitorAlarmInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'searchValue' => [ 'type' => 'string', 'locationName' => 'searchValue', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'AddMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddMonitorTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'targets' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'OperateMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetTargetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetTargetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMonitorAlarmInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MonitorAlarmInfo', ], ],
            ],
        ],
        'AddMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'UpdateMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'searchValue' => [ 'type' => 'string', 'locationName' => 'searchValue', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
    ],
];
