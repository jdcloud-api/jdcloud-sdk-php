<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'domainservice',
        'protocol' => 'json',
//        'serviceFullName' => 'domainservice',
//        'serviceId' => 'domainservice',
    ],
    'operations' => [
        'DescribeActionLog' => [
            'name' => 'DescribeActionLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/actionLog',
            ],
            'input' => [ 'shape' => 'DescribeActionLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeActionLogResponseShape', ],
        ],
        'DescribeDomains' => [
            'name' => 'DescribeDomains',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain',
            ],
            'input' => [ 'shape' => 'DescribeDomainsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDomainsResponseShape', ],
        ],
        'CreateDomain' => [
            'name' => 'CreateDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain',
            ],
            'input' => [ 'shape' => 'CreateDomainRequestShape', ],
            'output' => [ 'shape' => 'CreateDomainResponseShape', ],
        ],
        'ModifyDomain' => [
            'name' => 'ModifyDomain',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}',
            ],
            'input' => [ 'shape' => 'ModifyDomainRequestShape', ],
            'output' => [ 'shape' => 'ModifyDomainResponseShape', ],
        ],
        'DeleteDomain' => [
            'name' => 'DeleteDomain',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}',
            ],
            'input' => [ 'shape' => 'DeleteDomainRequestShape', ],
            'output' => [ 'shape' => 'DeleteDomainResponseShape', ],
        ],
        'DescribeDomainQueryCount' => [
            'name' => 'DescribeDomainQueryCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/queryCount',
            ],
            'input' => [ 'shape' => 'DescribeDomainQueryCountRequestShape', ],
            'output' => [ 'shape' => 'DescribeDomainQueryCountResponseShape', ],
        ],
        'DescribeDomainQueryTraffic' => [
            'name' => 'DescribeDomainQueryTraffic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/queryTraffic',
            ],
            'input' => [ 'shape' => 'DescribeDomainQueryTrafficRequestShape', ],
            'output' => [ 'shape' => 'DescribeDomainQueryTrafficResponseShape', ],
        ],
        'DescribeResourceRecord' => [
            'name' => 'DescribeResourceRecord',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/ResourceRecord',
            ],
            'input' => [ 'shape' => 'DescribeResourceRecordRequestShape', ],
            'output' => [ 'shape' => 'DescribeResourceRecordResponseShape', ],
        ],
        'CreateResourceRecord' => [
            'name' => 'CreateResourceRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/ResourceRecord',
            ],
            'input' => [ 'shape' => 'CreateResourceRecordRequestShape', ],
            'output' => [ 'shape' => 'CreateResourceRecordResponseShape', ],
        ],
        'ModifyResourceRecord' => [
            'name' => 'ModifyResourceRecord',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/ResourceRecord/{resourceRecordId}',
            ],
            'input' => [ 'shape' => 'ModifyResourceRecordRequestShape', ],
            'output' => [ 'shape' => 'ModifyResourceRecordResponseShape', ],
        ],
        'DeleteResourceRecord' => [
            'name' => 'DeleteResourceRecord',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/ResourceRecord/{resourceRecordId}',
            ],
            'input' => [ 'shape' => 'DeleteResourceRecordRequestShape', ],
            'output' => [ 'shape' => 'DeleteResourceRecordResponseShape', ],
        ],
        'ModifyResourceRecordStatus' => [
            'name' => 'ModifyResourceRecordStatus',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/ResourceRecord/{resourceRecordId}/status',
            ],
            'input' => [ 'shape' => 'ModifyResourceRecordStatusRequestShape', ],
            'output' => [ 'shape' => 'ModifyResourceRecordStatusResponseShape', ],
        ],
        'DescribeViewTree' => [
            'name' => 'DescribeViewTree',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/viewTree',
            ],
            'input' => [ 'shape' => 'DescribeViewTreeRequestShape', ],
            'output' => [ 'shape' => 'DescribeViewTreeResponseShape', ],
        ],
        'BatchSetResourceRecords' => [
            'name' => 'BatchSetResourceRecords',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/BatchSetResourceRecords',
            ],
            'input' => [ 'shape' => 'BatchSetResourceRecordsRequestShape', ],
            'output' => [ 'shape' => 'BatchSetResourceRecordsResponseShape', ],
        ],
        'DescribeUserView' => [
            'name' => 'DescribeUserView',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/UserView',
            ],
            'input' => [ 'shape' => 'DescribeUserViewRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserViewResponseShape', ],
        ],
        'CreateUserView' => [
            'name' => 'CreateUserView',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/UserView',
            ],
            'input' => [ 'shape' => 'CreateUserViewRequestShape', ],
            'output' => [ 'shape' => 'CreateUserViewResponseShape', ],
        ],
        'DeleteUserView' => [
            'name' => 'DeleteUserView',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/DeleteUserView',
            ],
            'input' => [ 'shape' => 'DeleteUserViewRequestShape', ],
            'output' => [ 'shape' => 'DeleteUserViewResponseShape', ],
        ],
        'DescribeUserViewIP' => [
            'name' => 'DescribeUserViewIP',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/UserViewIP',
            ],
            'input' => [ 'shape' => 'DescribeUserViewIPRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserViewIPResponseShape', ],
        ],
        'CreateUserViewIP' => [
            'name' => 'CreateUserViewIP',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/UserViewIP',
            ],
            'input' => [ 'shape' => 'CreateUserViewIPRequestShape', ],
            'output' => [ 'shape' => 'CreateUserViewIPResponseShape', ],
        ],
        'DeleteUserViewIP' => [
            'name' => 'DeleteUserViewIP',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/DeleteUserViewIP',
            ],
            'input' => [ 'shape' => 'DeleteUserViewIPRequestShape', ],
            'output' => [ 'shape' => 'DeleteUserViewIPResponseShape', ],
        ],
        'DescribeMonitor' => [
            'name' => 'DescribeMonitor',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/monitor',
            ],
            'input' => [ 'shape' => 'DescribeMonitorRequestShape', ],
            'output' => [ 'shape' => 'DescribeMonitorResponseShape', ],
        ],
        'CreateMonitor' => [
            'name' => 'CreateMonitor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/monitor',
            ],
            'input' => [ 'shape' => 'CreateMonitorRequestShape', ],
            'output' => [ 'shape' => 'CreateMonitorResponseShape', ],
        ],
        'ModifyMonitor' => [
            'name' => 'ModifyMonitor',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/monitor',
            ],
            'input' => [ 'shape' => 'ModifyMonitorRequestShape', ],
            'output' => [ 'shape' => 'ModifyMonitorResponseShape', ],
        ],
        'DescribeMonitorTarget' => [
            'name' => 'DescribeMonitorTarget',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/monitorTarget',
            ],
            'input' => [ 'shape' => 'DescribeMonitorTargetRequestShape', ],
            'output' => [ 'shape' => 'DescribeMonitorTargetResponseShape', ],
        ],
        'CreateMonitorTarget' => [
            'name' => 'CreateMonitorTarget',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/monitorTarget',
            ],
            'input' => [ 'shape' => 'CreateMonitorTargetRequestShape', ],
            'output' => [ 'shape' => 'CreateMonitorTargetResponseShape', ],
        ],
        'ModifyMonitorStatus' => [
            'name' => 'ModifyMonitorStatus',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/monitor/{monitorId}/status',
            ],
            'input' => [ 'shape' => 'ModifyMonitorStatusRequestShape', ],
            'output' => [ 'shape' => 'ModifyMonitorStatusResponseShape', ],
        ],
        'DeleteMonitor' => [
            'name' => 'DeleteMonitor',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/monitor/{monitorId}',
            ],
            'input' => [ 'shape' => 'DeleteMonitorRequestShape', ],
            'output' => [ 'shape' => 'DeleteMonitorResponseShape', ],
        ],
        'DescribeMonitorAlarm' => [
            'name' => 'DescribeMonitorAlarm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/regions/{regionId}/domain/{domainId}/monitorAlarm',
            ],
            'input' => [ 'shape' => 'DescribeMonitorAlarmRequestShape', ],
            'output' => [ 'shape' => 'DescribeMonitorAlarmResponseShape', ],
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
                'probeNsList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'defNsList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'NS' => [
            'type' => 'structure',
            'members' => [
                'tag' => [ 'type' => 'integer', 'locationName' => 'tag', ],
                'server' => [ 'type' => 'string', 'locationName' => 'server', ],
            ],
        ],
        'Result' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
            ],
        ],
        'BackupAddressesInfo' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
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
                'backupAddressList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupAddressesInfo', ], ],
                'requestHeaders' => [ 'type' => 'list', 'member' => [ 'shape' => 'HttpHeader', ], ],
                'responseBodyMatch' => [ 'type' => 'string', 'locationName' => 'responseBodyMatch', ],
                'responseCodeRanges' => [ 'type' => 'list', 'member' => [ 'shape' => 'HttpResponseCodeRange', ], ],
                'effectAddr' => [ 'type' => 'string', 'locationName' => 'effectAddr', ],
            ],
        ],
        'HttpHeader' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'HttpResponseCodeRange' => [
            'type' => 'structure',
            'members' => [
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
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
        'UpdateMonitor' => [
            'type' => 'structure',
            'members' => [
                'alarmLimit' => [ 'type' => 'integer', 'locationName' => 'alarmLimit', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ipBackup01' => [ 'type' => 'string', 'locationName' => 'ipBackup01', ],
                'ipBackup02' => [ 'type' => 'string', 'locationName' => 'ipBackup02', ],
                'backupAddressList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'requestHeaders' => [ 'type' => 'list', 'member' => [ 'shape' => 'HttpHeader', ], ],
                'responseBodyMatch' => [ 'type' => 'string', 'locationName' => 'responseBodyMatch', ],
                'responseCodeRanges' => [ 'type' => 'list', 'member' => [ 'shape' => 'HttpResponseCodeRange', ], ],
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
        'UpdateRR' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
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
        'Jdvpc' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'binded' => [ 'type' => 'boolean', 'locationName' => 'binded', ],
            ],
        ],
        'SubDomainExist' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'isExist' => [ 'type' => 'integer', 'locationName' => 'isExist', ],
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
        'Setlb' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
            ],
        ],
        'SetRR' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SetRecords', ], ],
            ],
        ],
        'Records' => [
            'type' => 'structure',
            'members' => [
                'record' => [ 'type' => 'string', 'locationName' => 'record', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'prior' => [ 'type' => 'integer', 'locationName' => 'prior', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
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
        'BatchSetDNS' => [
            'type' => 'structure',
            'members' => [
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
        'HostRRlb' => [
            'type' => 'structure',
            'members' => [
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'rate' => [ 'type' => 'double', 'locationName' => 'rate', ],
            ],
        ],
        'RecordsReqs' => [
            'type' => 'structure',
            'members' => [
                'records' => [ 'type' => 'list', 'member' => [ 'shape' => 'Records', ], ],
                'views' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'ImportDNS' => [
            'type' => 'structure',
            'members' => [
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
        'ResourceRecordSetReqs' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordsReqs', ], ],
            ],
        ],
        'ResourceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'ResourceRemarkInfo' => [
            'type' => 'structure',
            'members' => [
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
            ],
        ],
        'AddView' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'ipRanges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DelView' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
            ],
        ],
        'AddViewIP' => [
            'type' => 'structure',
            'members' => [
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'ipRanges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DelViewIP' => [
            'type' => 'structure',
            'members' => [
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'ipRanges' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeActionLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeActionLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeActionLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Actionlog', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeActionLogRequestShape' => [
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
        'DescribeDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DescribeDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainInfo', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'ModifyDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDomainQueryCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'traffic' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'DescribeDomainQueryCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDomainQueryCountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'DomainAdded', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
            ],
        ],
        'CreateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDomainQueryTrafficResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'traffic' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
            ],
        ],
        'DescribeDomainQueryCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DescribeDomainQueryTrafficRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'CreateDomainRequestShape' => [
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
        'DescribeDomainQueryTrafficResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDomainQueryTrafficResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'domainId' => [ 'type' => 'integer', 'locationName' => 'domainId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DeleteDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BatchSetResourceRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchSetDNS', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'BatchSetResourceRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteResourceRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeResourceRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'search' => [ 'type' => 'string', 'locationName' => 'search', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'BatchSetResourceRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchSetResourceRecordsResultShape', ],
            ],
        ],
        'DescribeViewTreeResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ViewTree', ], ],
            ],
        ],
        'ModifyResourceRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'UpdateRR', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
                'resourceRecordId' => [ 'type' => 'string', 'locationName' => 'resourceRecordId', ],
            ],
        ],
        'DescribeResourceRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RRInfo', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
            ],
        ],
        'DescribeViewTreeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'loadMode' => [ 'type' => 'integer', 'locationName' => 'loadMode', ],
                'packId' => [ 'type' => 'integer', 'locationName' => 'packId', ],
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'CreateResourceRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateResourceRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyResourceRecordStatusResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeResourceRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeResourceRecordResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteResourceRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateResourceRecordResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' =>  [ 'shape' => 'RR', ],
            ],
        ],
        'DescribeViewTreeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeViewTreeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteResourceRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
                'resourceRecordId' => [ 'type' => 'string', 'locationName' => 'resourceRecordId', ],
            ],
        ],
        'ModifyResourceRecordStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyResourceRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyResourceRecordStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
                'resourceRecordId' => [ 'type' => 'string', 'locationName' => 'resourceRecordId', ],
            ],
        ],
        'CreateResourceRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddRR', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'ModifyResourceRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteUserViewIPRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelViewIP', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DeleteUserViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteUserViewIPResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateUserViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddView', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DeleteUserViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelView', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DescribeUserViewIPResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserViewIPResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUserViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserViewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateUserViewIPRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddViewIP', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DescribeUserViewResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserViewInput', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'CreateUserViewIPResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeUserViewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'CreateUserViewResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Userview', ],
            ],
        ],
        'DescribeUserViewIPResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeUserViewIPRequestShape' => [
            'type' => 'structure',
            'members' => [
                'viewId' => [ 'type' => 'integer', 'locationName' => 'viewId', ],
                'viewName' => [ 'type' => 'string', 'locationName' => 'viewName', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'CreateUserViewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateUserViewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteUserViewIPResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteUserViewResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateUserViewIPResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyMonitorStatusResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'updateMonitor' =>  [ 'shape' => 'UpdateMonitor', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'ModifyMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateMonitorTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'targets' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'CreateMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyMonitorStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'switchTarget' => [ 'type' => 'string', 'locationName' => 'switchTarget', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
                'monitorId' => [ 'type' => 'string', 'locationName' => 'monitorId', ],
            ],
        ],
        'DeleteMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeMonitorTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMonitorTargetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMonitorResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateMonitorTargetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyMonitorStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'searchValue' => [ 'type' => 'string', 'locationName' => 'searchValue', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'CreateMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DescribeMonitorAlarmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'searchValue' => [ 'type' => 'string', 'locationName' => 'searchValue', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'DescribeMonitorAlarmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeMonitorAlarmResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMonitorTargetResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeMonitorAlarmResultShape' => [
            'type' => 'structure',
            'members' => [
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MonitorAlarmInfo', ], ],
            ],
        ],
        'CreateMonitorTargetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Monitor', ], ],
            ],
        ],
        'DescribeMonitorTargetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'subDomainName' => [ 'type' => 'string', 'locationName' => 'subDomainName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
            ],
        ],
        'ModifyMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'domainId' => [ 'type' => 'string', 'locationName' => 'domainId', ],
                'monitorId' => [ 'type' => 'string', 'locationName' => 'monitorId', ],
            ],
        ],
    ],
];
