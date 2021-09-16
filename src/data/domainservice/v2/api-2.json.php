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
    ],
];
