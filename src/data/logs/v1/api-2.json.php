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
        'DescribeCollectInfo' => [
            'name' => 'DescribeCollectInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}',
            ],
            'input' => [ 'shape' => 'DescribeCollectInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeCollectInfoResponseShape', ],
        ],
        'UpdateCollectInfo' => [
            'name' => 'UpdateCollectInfo',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}',
            ],
            'input' => [ 'shape' => 'UpdateCollectInfoRequestShape', ],
            'output' => [ 'shape' => 'UpdateCollectInfoResponseShape', ],
        ],
        'DescribeCollectResources' => [
            'name' => 'DescribeCollectResources',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}/resources',
            ],
            'input' => [ 'shape' => 'DescribeCollectResourcesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCollectResourcesResponseShape', ],
        ],
        'UpdateCollectResources' => [
            'name' => 'UpdateCollectResources',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}:updateResources',
            ],
            'input' => [ 'shape' => 'UpdateCollectResourcesRequestShape', ],
            'output' => [ 'shape' => 'UpdateCollectResourcesResponseShape', ],
        ],
        'CreateCollectInfo' => [
            'name' => 'CreateCollectInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/collectinfos',
            ],
            'input' => [ 'shape' => 'CreateCollectInfoRequestShape', ],
            'output' => [ 'shape' => 'CreateCollectInfoResponseShape', ],
        ],
        'CreateParser' => [
            'name' => 'CreateParser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/createParser',
            ],
            'input' => [ 'shape' => 'CreateParserRequestShape', ],
            'output' => [ 'shape' => 'CreateParserResponseShape', ],
        ],
        'DescribeParser' => [
            'name' => 'DescribeParser',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/describeParser',
            ],
            'input' => [ 'shape' => 'DescribeParserRequestShape', ],
            'output' => [ 'shape' => 'DescribeParserResponseShape', ],
        ],
        'UpdateParser' => [
            'name' => 'UpdateParser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/updateParser',
            ],
            'input' => [ 'shape' => 'UpdateParserRequestShape', ],
            'output' => [ 'shape' => 'UpdateParserResponseShape', ],
        ],
        'ValidateParser' => [
            'name' => 'ValidateParser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/validateParser',
            ],
            'input' => [ 'shape' => 'ValidateParserRequestShape', ],
            'output' => [ 'shape' => 'ValidateParserResponseShape', ],
        ],
        'CreateParser' => [
            'name' => 'CreateParser',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/createParser',
            ],
            'input' => [ 'shape' => 'CreateParserRequestShape', ],
            'output' => [ 'shape' => 'CreateParserResponseShape', ],
        ],
        'DescribeLogsets' => [
            'name' => 'DescribeLogsets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets',
            ],
            'input' => [ 'shape' => 'DescribeLogsetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogsetsResponseShape', ],
        ],
        'CreateLogset' => [
            'name' => 'CreateLogset',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logsets',
            ],
            'input' => [ 'shape' => 'CreateLogsetRequestShape', ],
            'output' => [ 'shape' => 'CreateLogsetResponseShape', ],
        ],
        'DescribeLogset' => [
            'name' => 'DescribeLogset',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}',
            ],
            'input' => [ 'shape' => 'DescribeLogsetRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogsetResponseShape', ],
        ],
        'UpdateLogset' => [
            'name' => 'UpdateLogset',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}',
            ],
            'input' => [ 'shape' => 'UpdateLogsetRequestShape', ],
            'output' => [ 'shape' => 'UpdateLogsetResponseShape', ],
        ],
        'DeleteLogset' => [
            'name' => 'DeleteLogset',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUIDs}',
            ],
            'input' => [ 'shape' => 'DeleteLogsetRequestShape', ],
            'output' => [ 'shape' => 'DeleteLogsetResponseShape', ],
        ],
        'DescribeLogtopics' => [
            'name' => 'DescribeLogtopics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics',
            ],
            'input' => [ 'shape' => 'DescribeLogtopicsRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogtopicsResponseShape', ],
        ],
        'CreateLogtopic' => [
            'name' => 'CreateLogtopic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics',
            ],
            'input' => [ 'shape' => 'CreateLogtopicRequestShape', ],
            'output' => [ 'shape' => 'CreateLogtopicResponseShape', ],
        ],
        'DeleteLogtopic' => [
            'name' => 'DeleteLogtopic',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUIDs}',
            ],
            'input' => [ 'shape' => 'DeleteLogtopicRequestShape', ],
            'output' => [ 'shape' => 'DeleteLogtopicResponseShape', ],
        ],
        'DescribeLogtopic' => [
            'name' => 'DescribeLogtopic',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}',
            ],
            'input' => [ 'shape' => 'DescribeLogtopicRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogtopicResponseShape', ],
        ],
        'UpdateLogtopic' => [
            'name' => 'UpdateLogtopic',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}',
            ],
            'input' => [ 'shape' => 'UpdateLogtopicRequestShape', ],
            'output' => [ 'shape' => 'UpdateLogtopicResponseShape', ],
        ],
        'TestMetricTask' => [
            'name' => 'TestMetricTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/metrictaskTest',
            ],
            'input' => [ 'shape' => 'TestMetricTaskRequestShape', ],
            'output' => [ 'shape' => 'TestMetricTaskResponseShape', ],
        ],
        'DescribeMetricTasks' => [
            'name' => 'DescribeMetricTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/metrictasks',
            ],
            'input' => [ 'shape' => 'DescribeMetricTasksRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricTasksResponseShape', ],
        ],
        'CreateMetricTask' => [
            'name' => 'CreateMetricTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/metrictasks',
            ],
            'input' => [ 'shape' => 'CreateMetricTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateMetricTaskResponseShape', ],
        ],
        'DescribeMetricTask' => [
            'name' => 'DescribeMetricTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/metrictasks/{logmetrictaskUID}',
            ],
            'input' => [ 'shape' => 'DescribeMetricTaskRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricTaskResponseShape', ],
        ],
        'UpdateMetricTask' => [
            'name' => 'UpdateMetricTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/metrictasks/{logmetrictaskUID}',
            ],
            'input' => [ 'shape' => 'UpdateMetricTaskRequestShape', ],
            'output' => [ 'shape' => 'UpdateMetricTaskResponseShape', ],
        ],
        'DeleteMetricTask' => [
            'name' => 'DeleteMetricTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/metrictasks/{logmetrictaskUID}',
            ],
            'input' => [ 'shape' => 'DeleteMetricTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteMetricTaskResponseShape', ],
        ],
        'Histograms' => [
            'name' => 'Histograms',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/histograms',
            ],
            'input' => [ 'shape' => 'HistogramsRequestShape', ],
            'output' => [ 'shape' => 'HistogramsResponseShape', ],
        ],
        'GetLogs' => [
            'name' => 'GetLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/scan',
            ],
            'input' => [ 'shape' => 'GetLogsRequestShape', ],
            'output' => [ 'shape' => 'GetLogsResponseShape', ],
        ],
        'Search' => [
            'name' => 'Search',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/search',
            ],
            'input' => [ 'shape' => 'SearchRequestShape', ],
            'output' => [ 'shape' => 'SearchResponseShape', ],
        ],
        'DescribeSubscribe' => [
            'name' => 'DescribeSubscribe',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/subscribe',
            ],
            'input' => [ 'shape' => 'DescribeSubscribeRequestShape', ],
            'output' => [ 'shape' => 'DescribeSubscribeResponseShape', ],
        ],
        'CreateSubscribe' => [
            'name' => 'CreateSubscribe',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/subscribe',
            ],
            'input' => [ 'shape' => 'CreateSubscribeRequestShape', ],
            'output' => [ 'shape' => 'CreateSubscribeResponseShape', ],
        ],
        'UpdateSubscribe' => [
            'name' => 'UpdateSubscribe',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/subscribe',
            ],
            'input' => [ 'shape' => 'UpdateSubscribeRequestShape', ],
            'output' => [ 'shape' => 'UpdateSubscribeResponseShape', ],
        ],
    ],
    'shapes' => [
        'AgResource' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'agName' => [ 'type' => 'string', 'locationName' => 'agName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'AgResourceEnd' => [
            'type' => 'structure',
            'members' => [
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'agName' => [ 'type' => 'string', 'locationName' => 'agName', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'AnalysisMetaData' => [
            'type' => 'structure',
            'members' => [
                'agg' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'group' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
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
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'CollectInfoDetailEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResourceEnd', ], ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'detail' =>  [ 'shape' => 'CollectTempalteEnd', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'logCustomTarget' => [ 'type' => 'string', 'locationName' => 'logCustomTarget', ],
                'logCustomTargetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resourcesCount' => [ 'type' => 'long', 'locationName' => 'resourcesCount', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagResource' =>  [ 'shape' => 'TagResourceEnd', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
            ],
        ],
        'TagResourceEnd' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'CollectTempalteEnd' => [
            'type' => 'structure',
            'members' => [
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'CreateCollectInfoSpec' => [
            'type' => 'structure',
            'members' => [
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResource', ], ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'logCustomTarget' => [ 'type' => 'string', 'locationName' => 'logCustomTarget', ],
                'logCustomTargetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagResource' =>  [ 'shape' => 'TagResource', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
            ],
        ],
        'TagResource' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'MetricTaskSqlSpec' => [
            'type' => 'structure',
            'members' => [
                'expr' => [ 'type' => 'string', 'locationName' => 'expr', ],
            ],
        ],
        'CreateMetricTaskSpec' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'customUnit' => [ 'type' => 'string', 'locationName' => 'customUnit', ],
                'dataField' => [ 'type' => 'string', 'locationName' => 'dataField', ],
                'filterContent' => [ 'type' => 'string', 'locationName' => 'filterContent', ],
                'filterOpen' => [ 'type' => 'string', 'locationName' => 'filterOpen', ],
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'interval' => [ 'type' => 'long', 'locationName' => 'interval', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'settingType' => [ 'type' => 'string', 'locationName' => 'settingType', ],
                'sqlSpec' =>  [ 'shape' => 'MetricTaskSqlSpec', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'CreateParserEnd' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'ParserField' => [
            'type' => 'structure',
            'members' => [
                'fieldFormat' => [ 'type' => 'string', 'locationName' => 'fieldFormat', ],
                'fieldType' => [ 'type' => 'string', 'locationName' => 'fieldType', ],
                'fieldValue' => [ 'type' => 'string', 'locationName' => 'fieldValue', ],
                'index' => [ 'type' => 'long', 'locationName' => 'index', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'PipelineSpec' => [
            'type' => 'structure',
            'members' => [
                'field' => [ 'type' => 'string', 'locationName' => 'field', ],
                'fieldType' => [ 'type' => 'string', 'locationName' => 'fieldType', ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
            ],
        ],
        'CreateParserSpec' => [
            'type' => 'structure',
            'members' => [
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParserField', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
            ],
        ],
        'CreateShipperSpec' => [
            'type' => 'structure',
            'members' => [
                'compress' => [ 'type' => 'string', 'locationName' => 'compress', ],
                'fileFormat' => [ 'type' => 'string', 'locationName' => 'fileFormat', ],
                'fileSize' => [ 'type' => 'long', 'locationName' => 'fileSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'targetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'targetType' => [ 'type' => 'long', 'locationName' => 'targetType', ],
                'timeInterval' => [ 'type' => 'long', 'locationName' => 'timeInterval', ],
            ],
        ],
        'CustomConf' => [
            'type' => 'structure',
            'members' => [
                'conf' => [ 'type' => 'string', 'locationName' => 'conf', ],
                'destType' => [ 'type' => 'string', 'locationName' => 'destType', ],
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
                'eq' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'not' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'range' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'regexp' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'simple_query_string' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'simpleQuery' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'substring' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
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
        'CustomSpec' => [
            'type' => 'structure',
            'members' => [
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'logCustomTarget' => [ 'type' => 'string', 'locationName' => 'logCustomTarget', ],
                'logCustomTargetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
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
                'tags' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
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
        'DescribeMetricTasksSpec' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DestConf' => [
            'type' => 'structure',
            'members' => [
                'custom' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomConf', ], ],
                'jcloud' => [ 'type' => 'boolean', 'locationName' => 'jcloud', ],
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
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JdcloudSpec' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
            ],
        ],
        'LogParserFieldEnd' => [
            'type' => 'structure',
            'members' => [
                'fieldFormat' => [ 'type' => 'string', 'locationName' => 'fieldFormat', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
                'fieldType' => [ 'type' => 'string', 'locationName' => 'fieldType', ],
                'index' => [ 'type' => 'long', 'locationName' => 'index', ],
            ],
        ],
        'LogParserEnd' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogParserFieldEnd', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
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
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'lastRecordTime' => [ 'type' => 'string', 'locationName' => 'lastRecordTime', ],
                'logsetName' => [ 'type' => 'string', 'locationName' => 'logsetName', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'prePattern' => [ 'type' => 'string', 'locationName' => 'prePattern', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'MetrictaskDetailEnd' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'customUnit' => [ 'type' => 'string', 'locationName' => 'customUnit', ],
                'dataField' => [ 'type' => 'string', 'locationName' => 'dataField', ],
                'filterContent' => [ 'type' => 'string', 'locationName' => 'filterContent', ],
                'filterOpen' => [ 'type' => 'string', 'locationName' => 'filterOpen', ],
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'interval' => [ 'type' => 'long', 'locationName' => 'interval', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'settingType' => [ 'type' => 'string', 'locationName' => 'settingType', ],
                'sqlSpec' =>  [ 'shape' => 'MetricTaskSqlSpec', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
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
        'SearchFields' => [
            'type' => 'structure',
            'members' => [
                'contentFields' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tagFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFields', ], ],
            ],
        ],
        'TagFields' => [
            'type' => 'structure',
            'members' => [
                'tagk' => [ 'type' => 'string', 'locationName' => 'tagk', ],
                'tagv' => [ 'type' => 'object', 'locationName' => 'tagv', ],
            ],
        ],
        'SearchLogContextSpec' => [
            'type' => 'structure',
            'members' => [
                'anchor' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'lineSize' => [ 'type' => 'long', 'locationName' => 'lineSize', ],
                'time' => [ 'type' => 'long', 'locationName' => 'time', ],
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
                'targetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
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
                'targetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'targetType' => [ 'type' => 'long', 'locationName' => 'targetType', ],
            ],
        ],
        'TemplateEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'disableTable' => [ 'type' => 'long', 'locationName' => 'disableTable', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'specialMode' => [ 'type' => 'long', 'locationName' => 'specialMode', ],
            ],
        ],
        'TestMetricTaskSpec' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'content' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dataField' => [ 'type' => 'string', 'locationName' => 'dataField', ],
                'filterContent' => [ 'type' => 'string', 'locationName' => 'filterContent', ],
                'filterOpen' => [ 'type' => 'string', 'locationName' => 'filterOpen', ],
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'settingType' => [ 'type' => 'string', 'locationName' => 'settingType', ],
                'sqlSpec' =>  [ 'shape' => 'MetricTaskSqlSpec', ],
            ],
        ],
        'TestMultiLinesSpec' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
            ],
        ],
        'UpdateCollectInfoSpec' => [
            'type' => 'structure',
            'members' => [
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResource', ], ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'logCustomTarget' => [ 'type' => 'string', 'locationName' => 'logCustomTarget', ],
                'logCustomTargetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'tagResource' =>  [ 'shape' => 'TagResource', ],
            ],
        ],
        'UpdateMetricTaskSpec' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'customUnit' => [ 'type' => 'string', 'locationName' => 'customUnit', ],
                'dataField' => [ 'type' => 'string', 'locationName' => 'dataField', ],
                'filterContent' => [ 'type' => 'string', 'locationName' => 'filterContent', ],
                'filterOpen' => [ 'type' => 'string', 'locationName' => 'filterOpen', ],
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'settingType' => [ 'type' => 'string', 'locationName' => 'settingType', ],
                'sqlSpec' =>  [ 'shape' => 'MetricTaskSqlSpec', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'UpdateParserSpec' => [
            'type' => 'structure',
            'members' => [
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParserField', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
            ],
        ],
        'UpdateSubscribeSpec' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
            ],
        ],
        'ValidateParserEnd' => [
            'type' => 'structure',
            'members' => [
                'fields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidateParserFieldEnd', ], ],
            ],
        ],
        'ValidateParserFieldEnd' => [
            'type' => 'structure',
            'members' => [
                'fieldType' => [ 'type' => 'string', 'locationName' => 'fieldType', ],
                'fieldValue' => [ 'type' => 'string', 'locationName' => 'fieldValue', ],
                'index' => [ 'type' => 'long', 'locationName' => 'index', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ValidateParserSpec' => [
            'type' => 'structure',
            'members' => [
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
            ],
        ],
        'CreateCollectInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
            ],
        ],
        'UpdateCollectInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateCollectInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResource', ], ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'logCustomTarget' => [ 'type' => 'string', 'locationName' => 'logCustomTarget', ],
                'logCustomTargetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'tagResource' =>  [ 'shape' => 'TagResource', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
            ],
        ],
        'ValidateParserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ValidateParserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ValidateParserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeParserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'UpdateCollectResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
            ],
        ],
        'UpdateParserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParserField', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'UpdateParserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateParserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateParserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCollectResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceEnd', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'CreateParserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParserField', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'CreateParserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateParserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeParserResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeParserResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeParserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ValidateParserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
            ],
        ],
        'CreateCollectInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateCollectInfoResultShape', ],
            ],
        ],
        'DescribeCollectInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCollectInfoResultShape', ],
            ],
        ],
        'DescribeCollectInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResourceEnd', ], ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'detail' =>  [ 'shape' => 'CollectTempalteEnd', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'hasResource' => [ 'type' => 'boolean', 'locationName' => 'hasResource', ],
                'logCustomTarget' => [ 'type' => 'string', 'locationName' => 'logCustomTarget', ],
                'logCustomTargetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagResource' =>  [ 'shape' => 'TagResourceEnd', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
            ],
        ],
        'UpdateCollectInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCollectResourcesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
            ],
        ],
        'UpdateParserResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateCollectResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCollectResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCollectResourcesResultShape', ],
            ],
        ],
        'CreateCollectInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResource', ], ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'logCustomTarget' => [ 'type' => 'string', 'locationName' => 'logCustomTarget', ],
                'logCustomTargetConf' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagResource' =>  [ 'shape' => 'TagResource', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'UpdateCollectResourcesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCollectInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
            ],
        ],
        'DescribeLogsetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
            ],
        ],
        'DescribeLogsetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeLogsetsResultShape', ],
            ],
        ],
        'DescribeLogsetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogsetEnd', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'CreateLogsetResultShape' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
            ],
        ],
        'DescribeLogsetResultShape' => [
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
        'DeleteLogsetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateLogsetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'lifeCycle' => [ 'type' => 'long', 'locationName' => 'lifeCycle', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeLogsetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeLogsetResultShape', ],
            ],
        ],
        'UpdateLogsetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLogsetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateLogsetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'lifeCycle' => [ 'type' => 'long', 'locationName' => 'lifeCycle', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
            ],
        ],
        'DeleteLogsetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUIDs' => [ 'type' => 'string', 'locationName' => 'logsetUIDs', ],
            ],
        ],
        'DeleteLogsetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateLogsetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateLogsetResultShape', ],
            ],
        ],
        'UpdateLogsetResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateLogtopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
            ],
        ],
        'DescribeLogtopicsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogtopicDetailEnd', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'CreateLogtopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateLogtopicResultShape', ],
            ],
        ],
        'DeleteLogtopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUIDs' => [ 'type' => 'string', 'locationName' => 'logtopicUIDs', ],
            ],
        ],
        'DescribeLogtopicsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
            ],
        ],
        'DescribeLogtopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'UpdateLogtopicResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateLogtopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateLogtopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
            ],
        ],
        'DeleteLogtopicResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeLogtopicResultShape' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'logsetName' => [ 'type' => 'string', 'locationName' => 'logsetName', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'prePattern' => [ 'type' => 'string', 'locationName' => 'prePattern', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'DeleteLogtopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLogtopicsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeLogtopicsResultShape', ],
            ],
        ],
        'UpdateLogtopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'DescribeLogtopicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeLogtopicResultShape', ],
            ],
        ],
        'TestMetricTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'TestMetricTaskResultShape', ],
            ],
        ],
        'DescribeMetricTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricTasksResultShape', ],
            ],
        ],
        'CreateMetricTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'customUnit' => [ 'type' => 'string', 'locationName' => 'customUnit', ],
                'dataField' => [ 'type' => 'string', 'locationName' => 'dataField', ],
                'filterContent' => [ 'type' => 'string', 'locationName' => 'filterContent', ],
                'filterOpen' => [ 'type' => 'string', 'locationName' => 'filterOpen', ],
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'interval' => [ 'type' => 'long', 'locationName' => 'interval', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'settingType' => [ 'type' => 'string', 'locationName' => 'settingType', ],
                'sqlSpec' =>  [ 'shape' => 'MetricTaskSqlSpec', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'DescribeMetricTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetrictaskDetailEnd', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeMetricTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricTaskResultShape', ],
            ],
        ],
        'DeleteMetricTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'string', 'locationName' => 'suc', ],
            ],
        ],
        'DescribeMetricTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'logmetrictaskUID' => [ 'type' => 'string', 'locationName' => 'logmetrictaskUID', ],
            ],
        ],
        'DescribeMetricTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'UpdateMetricTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateMetricTaskResultShape', ],
            ],
        ],
        'CreateMetricTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateMetricTaskResultShape', ],
            ],
        ],
        'DeleteMetricTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteMetricTaskResultShape', ],
            ],
        ],
        'DescribeMetricTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'MetrictaskDetailEnd', ],
            ],
        ],
        'DeleteMetricTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'logmetrictaskUID' => [ 'type' => 'string', 'locationName' => 'logmetrictaskUID', ],
            ],
        ],
        'UpdateMetricTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'customUnit' => [ 'type' => 'string', 'locationName' => 'customUnit', ],
                'dataField' => [ 'type' => 'string', 'locationName' => 'dataField', ],
                'filterContent' => [ 'type' => 'string', 'locationName' => 'filterContent', ],
                'filterOpen' => [ 'type' => 'string', 'locationName' => 'filterOpen', ],
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'settingType' => [ 'type' => 'string', 'locationName' => 'settingType', ],
                'sqlSpec' =>  [ 'shape' => 'MetricTaskSqlSpec', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'logmetrictaskUID' => [ 'type' => 'string', 'locationName' => 'logmetrictaskUID', ],
            ],
        ],
        'UpdateMetricTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'string', 'locationName' => 'suc', ],
            ],
        ],
        'TestMetricTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'aggregate' => [ 'type' => 'string', 'locationName' => 'aggregate', ],
                'content' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dataField' => [ 'type' => 'string', 'locationName' => 'dataField', ],
                'filterContent' => [ 'type' => 'string', 'locationName' => 'filterContent', ],
                'filterOpen' => [ 'type' => 'string', 'locationName' => 'filterOpen', ],
                'filterType' => [ 'type' => 'string', 'locationName' => 'filterType', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'settingType' => [ 'type' => 'string', 'locationName' => 'settingType', ],
                'sqlSpec' =>  [ 'shape' => 'MetricTaskSqlSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'TestMetricTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'lines' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'CreateMetricTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'suc' => [ 'type' => 'string', 'locationName' => 'suc', ],
            ],
        ],
        'GetLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'searchFields' =>  [ 'shape' => 'SearchFields', ],
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'GetLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetLogsResultShape', ],
            ],
        ],
        'HistogramsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'HistogramsResultShape', ],
            ],
        ],
        'HistogramsResultShape' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'progress' => [ 'type' => 'string', 'locationName' => 'progress', ],
                'searchFields' =>  [ 'shape' => 'SearchFields', ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'SearchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'expr' => [ 'type' => 'string', 'locationName' => 'expr', ],
                'caseSensitive' => [ 'type' => 'boolean', 'locationName' => 'caseSensitive', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'GetLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskID' => [ 'type' => 'string', 'locationName' => 'taskID', ],
                'expr' => [ 'type' => 'string', 'locationName' => 'expr', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'sort' => [ 'type' => 'string', 'locationName' => 'sort', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'SearchResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'searchFields' =>  [ 'shape' => 'SearchFields', ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'HistogramsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'expr' => [ 'type' => 'string', 'locationName' => 'expr', ],
                'caseSensitive' => [ 'type' => 'boolean', 'locationName' => 'caseSensitive', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'SearchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SearchResultShape', ],
            ],
        ],
        'CreateSubscribeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'DescribeSubscribeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeSubscribeResultShape', ],
            ],
        ],
        'CreateSubscribeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateSubscribeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'UpdateSubscribeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSubscribeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'DescribeSubscribeResultShape' => [
            'type' => 'structure',
            'members' => [
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'kafkaBroker' => [ 'type' => 'string', 'locationName' => 'kafkaBroker', ],
                'kafkaPassword' => [ 'type' => 'string', 'locationName' => 'kafkaPassword', ],
                'kafkaTopic' => [ 'type' => 'string', 'locationName' => 'kafkaTopic', ],
                'kafkaUsername' => [ 'type' => 'string', 'locationName' => 'kafkaUsername', ],
                'logtopicId' => [ 'type' => 'string', 'locationName' => 'logtopicId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'updatedTime' => [ 'type' => 'string', 'locationName' => 'updatedTime', ],
            ],
        ],
        'CreateSubscribeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateSubscribeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
