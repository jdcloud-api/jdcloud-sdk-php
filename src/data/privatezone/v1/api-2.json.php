<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'privatezone',
        'protocol' => 'json',
//        'serviceFullName' => 'privatezone',
//        'serviceId' => 'privatezone',
    ],
    'operations' => [
        'DescribeActionLogs' => [
            'name' => 'DescribeActionLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/actionLogs',
            ],
            'input' => [ 'shape' => 'DescribeActionLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeActionLogsResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'DescribeResourceRecords' => [
            'name' => 'DescribeResourceRecords',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}/resourceRecords',
            ],
            'input' => [ 'shape' => 'DescribeResourceRecordsRequestShape', ],
            'output' => [ 'shape' => 'DescribeResourceRecordsResponseShape', ],
        ],
        'CreateResourceRecord' => [
            'name' => 'CreateResourceRecord',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}/resourceRecords',
            ],
            'input' => [ 'shape' => 'CreateResourceRecordRequestShape', ],
            'output' => [ 'shape' => 'CreateResourceRecordResponseShape', ],
        ],
        'ModifyResourceRecord' => [
            'name' => 'ModifyResourceRecord',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}/resourceRecord/{resourceRecordId}',
            ],
            'input' => [ 'shape' => 'ModifyResourceRecordRequestShape', ],
            'output' => [ 'shape' => 'ModifyResourceRecordResponseShape', ],
        ],
        'DeleteResourceRecords' => [
            'name' => 'DeleteResourceRecords',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}/resourceRecords/{resourceRecordId}',
            ],
            'input' => [ 'shape' => 'DeleteResourceRecordsRequestShape', ],
            'output' => [ 'shape' => 'DeleteResourceRecordsResponseShape', ],
        ],
        'SetResourceRecordsStatus' => [
            'name' => 'SetResourceRecordsStatus',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}/resourceRecords/{resourceRecordId}/status',
            ],
            'input' => [ 'shape' => 'SetResourceRecordsStatusRequestShape', ],
            'output' => [ 'shape' => 'SetResourceRecordsStatusResponseShape', ],
        ],
        'ExportResourceRecords' => [
            'name' => 'ExportResourceRecords',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}/resourceRecords:export',
            ],
            'input' => [ 'shape' => 'ExportResourceRecordsRequestShape', ],
            'output' => [ 'shape' => 'ExportResourceRecordsResponseShape', ],
        ],
        'ImportResourceRecords' => [
            'name' => 'ImportResourceRecords',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}/resourceRecords:import',
            ],
            'input' => [ 'shape' => 'ImportResourceRecordsRequestShape', ],
            'output' => [ 'shape' => 'ImportResourceRecordsResponseShape', ],
        ],
        'ZoneResolveCount' => [
            'name' => 'ZoneResolveCount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stat:zoneResolveCount',
            ],
            'input' => [ 'shape' => 'ZoneResolveCountRequestShape', ],
            'output' => [ 'shape' => 'ZoneResolveCountResponseShape', ],
        ],
        'ZoneFlowCount' => [
            'name' => 'ZoneFlowCount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/stat:zoneFlowCount',
            ],
            'input' => [ 'shape' => 'ZoneFlowCountRequestShape', ],
            'output' => [ 'shape' => 'ZoneFlowCountResponseShape', ],
        ],
        'DescribeZones' => [
            'name' => 'DescribeZones',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/zones',
            ],
            'input' => [ 'shape' => 'DescribeZonesRequestShape', ],
            'output' => [ 'shape' => 'DescribeZonesResponseShape', ],
        ],
        'CreateZone' => [
            'name' => 'CreateZone',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/zones',
            ],
            'input' => [ 'shape' => 'CreateZoneRequestShape', ],
            'output' => [ 'shape' => 'CreateZoneResponseShape', ],
        ],
        'DeleteZone' => [
            'name' => 'DeleteZone',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}',
            ],
            'input' => [ 'shape' => 'DeleteZoneRequestShape', ],
            'output' => [ 'shape' => 'DeleteZoneResponseShape', ],
        ],
        'RetryRecurse' => [
            'name' => 'RetryRecurse',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}:retryRecurse',
            ],
            'input' => [ 'shape' => 'RetryRecurseRequestShape', ],
            'output' => [ 'shape' => 'RetryRecurseResponseShape', ],
        ],
        'BindVpc' => [
            'name' => 'BindVpc',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/zone/{zoneId}/vpc:bind',
            ],
            'input' => [ 'shape' => 'BindVpcRequestShape', ],
            'output' => [ 'shape' => 'BindVpcResponseShape', ],
        ],
    ],
    'shapes' => [
        'DescribeActionLogsRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'detail' => [ 'type' => 'string', 'locationName' => 'detail', ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'failReason' => [ 'type' => 'string', 'locationName' => 'failReason', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
            ],
        ],
        'DescribeInstancesRes' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'zoneNum' => [ 'type' => 'integer', 'locationName' => 'zoneNum', ],
                'bindVpcNum' => [ 'type' => 'integer', 'locationName' => 'bindVpcNum', ],
                'zoneLevel' => [ 'type' => 'integer', 'locationName' => 'zoneLevel', ],
                'rrNum' => [ 'type' => 'integer', 'locationName' => 'rrNum', ],
                'domainLevel' => [ 'type' => 'integer', 'locationName' => 'domainLevel', ],
                'rrAuthorExport' => [ 'type' => 'boolean', 'locationName' => 'rrAuthorExport', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'durationUnit' => [ 'type' => 'string', 'locationName' => 'durationUnit', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'chargeStutas' => [ 'type' => 'string', 'locationName' => 'chargeStutas', ],
                'usedZoneNum' => [ 'type' => 'integer', 'locationName' => 'usedZoneNum', ],
            ],
        ],
        'DescribePacksRes' => [
            'type' => 'structure',
            'members' => [
                'packType' => [ 'type' => 'string', 'locationName' => 'packType', ],
                'packName' => [ 'type' => 'string', 'locationName' => 'packName', ],
                'price' => [ 'type' => 'integer', 'locationName' => 'price', ],
                'sla' => [ 'type' => 'string', 'locationName' => 'sla', ],
                'bindVpcNum' => [ 'type' => 'integer', 'locationName' => 'bindVpcNum', ],
                'domainLevel' => [ 'type' => 'integer', 'locationName' => 'domainLevel', ],
                'rrAuthorExport' => [ 'type' => 'boolean', 'locationName' => 'rrAuthorExport', ],
                'rrNum' => [ 'type' => 'integer', 'locationName' => 'rrNum', ],
                'zoneLevel' => [ 'type' => 'integer', 'locationName' => 'zoneLevel', ],
                'zoneNumMin' => [ 'type' => 'integer', 'locationName' => 'zoneNumMin', ],
                'zoneNumMax' => [ 'type' => 'integer', 'locationName' => 'zoneNumMax', ],
                'durationMin' => [ 'type' => 'integer', 'locationName' => 'durationMin', ],
                'durationMax' => [ 'type' => 'integer', 'locationName' => 'durationMax', ],
                'durationUnit' => [ 'type' => 'string', 'locationName' => 'durationUnit', ],
            ],
        ],
        'DescribeResourceRecordsRes' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'recordType' => [ 'type' => 'string', 'locationName' => 'recordType', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ImportResourceRecordsReq' => [
            'type' => 'structure',
            'members' => [
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'recordType' => [ 'type' => 'string', 'locationName' => 'recordType', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
            ],
        ],
        'BindVpcReq' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
            ],
        ],
        'DescribeZonesRes' => [
            'type' => 'structure',
            'members' => [
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'zoneType' => [ 'type' => 'string', 'locationName' => 'zoneType', ],
                'recordCount' => [ 'type' => 'integer', 'locationName' => 'recordCount', ],
                'lock' => [ 'type' => 'boolean', 'locationName' => 'lock', ],
                'retryRecurse' => [ 'type' => 'boolean', 'locationName' => 'retryRecurse', ],
                'resolveStatus' => [ 'type' => 'string', 'locationName' => 'resolveStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'bindVpc' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeBindVpcRes', ], ],
            ],
        ],
        'DescribeBindVpcRes' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
            ],
        ],
        'DescribeActionLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeActionLogsRes', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeActionLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeActionLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeActionLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'keyWord' => [ 'type' => 'string', 'locationName' => 'keyWord', ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'actionType' => [ 'type' => 'string', 'locationName' => 'actionType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeInstancesRes', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeResourceRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'CreateResourceRecordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteResourceRecordsResponseShape' => [
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
        'SetResourceRecordsStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'resourceRecordId' => [ 'type' => 'string', 'locationName' => 'resourceRecordId', ],
            ],
        ],
        'SetResourceRecordsStatusResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ImportResourceRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'importResourceRecordsReq' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImportResourceRecordsReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'ModifyResourceRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ImportResourceRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeResourceRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeResourceRecordsRes', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeResourceRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeResourceRecordsResultShape', ],
            ],
        ],
        'ExportResourceRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
            ],
        ],
        'ExportResourceRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'ModifyResourceRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'recordType' => [ 'type' => 'string', 'locationName' => 'recordType', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'resourceRecordId' => [ 'type' => 'string', 'locationName' => 'resourceRecordId', ],
            ],
        ],
        'DeleteResourceRecordsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'resourceRecordId' => [ 'type' => 'string', 'locationName' => 'resourceRecordId', ],
            ],
        ],
        'CreateResourceRecordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetResourceRecordsStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateResourceRecordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'hostRecord' => [ 'type' => 'string', 'locationName' => 'hostRecord', ],
                'hostValue' => [ 'type' => 'string', 'locationName' => 'hostValue', ],
                'recordType' => [ 'type' => 'string', 'locationName' => 'recordType', ],
                'ttl' => [ 'type' => 'integer', 'locationName' => 'ttl', ],
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'ImportResourceRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteResourceRecordsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExportResourceRecordsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ExportResourceRecordsResultShape', ],
            ],
        ],
        'ZoneFlowCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'zoneIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ZoneResolveCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'traffic' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'ZoneFlowCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'traffic' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
            ],
        ],
        'ZoneFlowCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ZoneFlowCountResultShape', ],
            ],
        ],
        'ZoneResolveCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ZoneResolveCountResultShape', ],
            ],
        ],
        'ZoneResolveCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'zoneIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateZoneRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'zoneType' => [ 'type' => 'string', 'locationName' => 'zoneType', ],
                'retryRecurse' => [ 'type' => 'boolean', 'locationName' => 'retryRecurse', ],
                'bindVpc' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindVpcReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeZonesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeZonesRes', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'RetryRecurseResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteZoneResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindVpcRequestShape' => [
            'type' => 'structure',
            'members' => [
                'bindVpc' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindVpcReq', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'CreateZoneResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteZoneResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RetryRecurseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BindVpcResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RetryRecurseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'retryRecurse' => [ 'type' => 'boolean', 'locationName' => 'retryRecurse', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
        'DescribeZonesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeZonesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeZonesResultShape', ],
            ],
        ],
        'BindVpcResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateZoneResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteZoneRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'zoneId' => [ 'type' => 'string', 'locationName' => 'zoneId', ],
            ],
        ],
    ],
];
