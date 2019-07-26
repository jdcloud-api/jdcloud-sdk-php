<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'logs',
        'protocol' => 'json',
//        'serviceFullName' => 'logs',
//        'serviceId' => 'logs',
    ],
    'operations' => [
        'DescribeLogdCA' => [
            'name' => 'DescribeLogdCA',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ca',
            ],
            'input' => [ 'shape' => 'DescribeLogdCARequestShape', ],
            'output' => [ 'shape' => 'DescribeLogdCAResponseShape', ],
        ],
        'DescribeInstanceCollectConfs' => [
            'name' => 'DescribeInstanceCollectConfs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/collectconfs',
            ],
            'input' => [ 'shape' => 'DescribeInstanceCollectConfsRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceCollectConfsResponseShape', ],
        ],
        'Put' => [
            'name' => 'Put',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logtopics/{logtopicUID}:put',
            ],
            'input' => [ 'shape' => 'PutRequestShape', ],
            'output' => [ 'shape' => 'PutResponseShape', ],
        ],
    ],
    'shapes' => [
        'Pair' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ApiConfEnd' => [
            'type' => 'structure',
            'members' => [
                'apiName' => [ 'type' => 'string', 'locationName' => 'apiName', ],
                'apiType' => [ 'type' => 'long', 'locationName' => 'apiType', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'params' => [ 'type' => 'list', 'member' => [ 'shape' => 'Pair', ], ],
                'resp' => [ 'type' => 'list', 'member' => [ 'shape' => 'Pair', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
            ],
        ],
        'CollectConf' => [
            'type' => 'structure',
            'members' => [
                'collectTemplateUID' => [ 'type' => 'string', 'locationName' => 'collectTemplateUID', ],
                'file' => [ 'type' => 'string', 'locationName' => 'file', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
            ],
        ],
        'CollectInfoDetailEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'detail' =>  [ 'shape' => 'CollectTempalteEnd', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourcesCount' => [ 'type' => 'long', 'locationName' => 'resourcesCount', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
            ],
        ],
        'CollectTempalteEnd' => [
            'type' => 'structure',
            'members' => [
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
            ],
        ],
        'CreateShipperSpec' => [
            'type' => 'structure',
            'members' => [
                'compress' => [ 'type' => 'string', 'locationName' => 'compress', ],
                'fileFormat' => [ 'type' => 'string', 'locationName' => 'fileFormat', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'targetConf' => [ 'type' => 'object', 'locationName' => 'targetConf', ],
                'targetType' => [ 'type' => 'long', 'locationName' => 'targetType', ],
                'timeInterval' => [ 'type' => 'long', 'locationName' => 'timeInterval', ],
            ],
        ],
        'CustomLogSearchOut' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'CustomLogSearchSpec' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'from' => [ 'type' => 'long', 'locationName' => 'from', ],
                'logTopicId' => [ 'type' => 'string', 'locationName' => 'logTopicId', ],
                'match' => [ 'type' => 'list', 'member' => [ 'shape' => 'Match', ], ],
                'recordId' => [ 'type' => 'string', 'locationName' => 'recordId', ],
                'resp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'timeRange' =>  [ 'shape' => 'DateTimeRange', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'DateTimeRange' => [
            'type' => 'structure',
            'members' => [
                'end' => [ 'type' => 'string', 'locationName' => 'end', ],
                'start' => [ 'type' => 'string', 'locationName' => 'start', ],
            ],
        ],
        'Match' => [
            'type' => 'structure',
            'members' => [
                'eq' => [ 'type' => 'object', 'locationName' => 'eq', ],
                'not' => [ 'type' => 'object', 'locationName' => 'not', ],
                'range' => [ 'type' => 'object', 'locationName' => 'range', ],
                'regexp' => [ 'type' => 'object', 'locationName' => 'regexp', ],
                'simple_query_string' => [ 'type' => 'object', 'locationName' => 'simple_query_string', ],
                'simpleQuery' => [ 'type' => 'object', 'locationName' => 'simpleQuery', ],
                'substring' => [ 'type' => 'object', 'locationName' => 'substring', ],
            ],
        ],
        'SimpleQueryItem' => [
            'type' => 'structure',
            'members' => [
                'exclude' => [ 'type' => 'boolean', 'locationName' => 'exclude', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
            ],
        ],
        'Range' => [
            'type' => 'structure',
            'members' => [
                'gt' => [ 'type' => 'object', 'locationName' => 'gt', ],
                'gte' => [ 'type' => 'object', 'locationName' => 'gte', ],
                'lt' => [ 'type' => 'object', 'locationName' => 'lt', ],
                'lte' => [ 'type' => 'object', 'locationName' => 'lte', ],
            ],
        ],
        'SimpleQuery' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'SimpleQueryItem', ], ],
                'opt' => [ 'type' => 'string', 'locationName' => 'opt', ],
            ],
        ],
        'DescribeInstanceCollectConfsEnd' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectConf', ], ],
            ],
        ],
        'DescribeInstanceMetaEnd' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
            ],
        ],
        'DescribeLogdCAEnd' => [
            'type' => 'structure',
            'members' => [
                'cer' => [ 'type' => 'string', 'locationName' => 'cer', ],
                'expiryDate' => [ 'type' => 'string', 'locationName' => 'expiryDate', ],
            ],
        ],
        'Entry' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'tags' => [ 'type' => 'object', 'locationName' => 'tags', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
            ],
        ],
        'Erp' => [
            'type' => 'structure',
            'members' => [
                'erp' => [ 'type' => 'string', 'locationName' => 'erp', ],
                'serviceCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Err' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'details' => [ 'type' => 'object', 'locationName' => 'details', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Error' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'details' => [ 'type' => 'object', 'locationName' => 'details', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Field' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'LogsetEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'hasTopic' => [ 'type' => 'boolean', 'locationName' => 'hasTopic', ],
                'lifeCycle' => [ 'type' => 'long', 'locationName' => 'lifeCycle', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'LogtopicDetailEnd' => [
            'type' => 'structure',
            'members' => [
                'collectInfo' =>  [ 'shape' => 'CollectInfoDetailEnd', ],
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'lastRecordTime' => [ 'type' => 'string', 'locationName' => 'lastRecordTime', ],
                'logsetName' => [ 'type' => 'string', 'locationName' => 'logsetName', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'ResourceEnd' => [
            'type' => 'structure',
            'members' => [
                'agentStatus' => [ 'type' => 'long', 'locationName' => 'agentStatus', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'ShipperEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'compress' => [ 'type' => 'string', 'locationName' => 'compress', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'fileFormat' => [ 'type' => 'string', 'locationName' => 'fileFormat', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceType' => [ 'type' => 'long', 'locationName' => 'resourceType', ],
                'resourceUIDs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'targetConf' => [ 'type' => 'object', 'locationName' => 'targetConf', ],
                'targetType' => [ 'type' => 'long', 'locationName' => 'targetType', ],
                'timeInterval' => [ 'type' => 'long', 'locationName' => 'timeInterval', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'ShipperTaskEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'allowRetry' => [ 'type' => 'boolean', 'locationName' => 'allowRetry', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'shipperEndTime' => [ 'type' => 'long', 'locationName' => 'shipperEndTime', ],
                'shipperStartTime' => [ 'type' => 'long', 'locationName' => 'shipperStartTime', ],
                'shipperUID' => [ 'type' => 'string', 'locationName' => 'shipperUID', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'StartShippersSpec' => [
            'type' => 'structure',
            'members' => [
                'shipperList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'StopShippersSpec' => [
            'type' => 'structure',
            'members' => [
                'shipperList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SysTemplateEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'createErp' => [ 'type' => 'string', 'locationName' => 'createErp', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'updateErp' => [ 'type' => 'string', 'locationName' => 'updateErp', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'SystemLogContextSpec' => [
            'type' => 'structure',
            'members' => [
                'anchor' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'lineSize' => [ 'type' => 'long', 'locationName' => 'lineSize', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'time' => [ 'type' => 'long', 'locationName' => 'time', ],
            ],
        ],
        'SystemLogResultData' => [
            'type' => 'structure',
            'members' => [
                'anchor' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'source' => [ 'type' => 'object', 'locationName' => 'source', ],
            ],
        ],
        'SystemLogEnd' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SystemLogResultData', ], ],
                'hits' => [ 'type' => 'long', 'locationName' => 'hits', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
            ],
        ],
        'TimestampRange' => [
            'type' => 'structure',
            'members' => [
                'end' => [ 'type' => 'long', 'locationName' => 'end', ],
                'start' => [ 'type' => 'long', 'locationName' => 'start', ],
            ],
        ],
        'SystemLogHistorySpec' => [
            'type' => 'structure',
            'members' => [
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'exactMatch' => [ 'type' => 'boolean', 'locationName' => 'exactMatch', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'order' => [ 'type' => 'string', 'locationName' => 'order', ],
                'page' => [ 'type' => 'long', 'locationName' => 'page', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'time' =>  [ 'shape' => 'TimestampRange', ],
            ],
        ],
        'SystemLogResultStatus' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
            ],
        ],
        'SystemLogResultTrace' => [
            'type' => 'structure',
            'members' => [
                'destIp' => [ 'type' => 'string', 'locationName' => 'destIp', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'srcIp' => [ 'type' => 'string', 'locationName' => 'srcIp', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'TargetConf' => [
            'type' => 'structure',
            'members' => [
                'targetConf' => [ 'type' => 'object', 'locationName' => 'targetConf', ],
                'targetType' => [ 'type' => 'long', 'locationName' => 'targetType', ],
            ],
        ],
        'TemplateEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeLogdCAResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeLogdCAResultShape', ],
            ],
        ],
        'DescribeInstanceCollectConfsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeLogdCARequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceCollectConfsResultShape' => [
            'type' => 'structure',
            'members' => [
                'confs' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectConf', ], ],
            ],
        ],
        'DescribeInstanceCollectConfsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeInstanceCollectConfsResultShape', ],
            ],
        ],
        'DescribeLogdCAResultShape' => [
            'type' => 'structure',
            'members' => [
                'cert' => [ 'type' => 'string', 'locationName' => 'cert', ],
                'expiryDate' => [ 'type' => 'long', 'locationName' => 'expiryDate', ],
                'privateKey' => [ 'type' => 'string', 'locationName' => 'privateKey', ],
            ],
        ],
        'PutRequestShape' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'entries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Entry', ], ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'PutResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PutResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
    ],
];
