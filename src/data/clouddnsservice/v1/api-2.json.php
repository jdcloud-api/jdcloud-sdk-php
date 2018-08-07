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
        'Domain' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'createTime' => [ 'type' => 'integer', 'locationName' => 'createTime', ],
                'expirationDate' => [ 'type' => 'integer', 'locationName' => 'expirationDate', ],
                'packId' => [ 'type' => 'integer', 'locationName' => 'packId', ],
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
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
            ],
        ],
        'ViewTree' => [
            'type' => 'structure',
            'members' => [
                'disabled' => [ 'type' => 'boolean', 'locationName' => 'disabled', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'leaf' => [ 'type' => 'boolean', 'locationName' => 'leaf', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'ViewTree', ], ],
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
        'AddDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DelDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'UpdateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Domain', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
            ],
        ],
        'GetDomainQueryCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'traffic' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'GetDomainQueryCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainQueryCountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Domain', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetDomainQueryTrafficResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainQueryTrafficResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelDomainResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'GetDomainQueryTrafficResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'traffic' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
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
        'GetDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'updateDomain' =>  [ 'shape' => 'Domain', ],
            ],
        ],
        'OperateRRResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AddRRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'AddRRResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetViewTreeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetViewTreeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'UpdateRRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddRRResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' =>  [ 'shape' => 'RR', ],
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
        'UpdateRRResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'AddRRRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddRR', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'GetViewTreeResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ViewTree', ], ],
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
        'SearchRRResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SearchRRResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OperateRRResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'GetMonitorAlarmInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MonitorAlarmInfo', ], ],
            ],
        ],
        'AddMonitorTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'AddMonitorResultShape' => [
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
        'GetTargetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'OperateMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMonitorResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'OperateMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddMonitorTargetResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'UpdateMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'AddMonitorTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'targets' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'AddMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
    ],
];
