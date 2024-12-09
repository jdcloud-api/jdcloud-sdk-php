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
        'K8sAgentHeartbeat' => [
            'name' => 'K8sAgentHeartbeat',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/heartbeat',
            ],
            'input' => [ 'shape' => 'K8sAgentHeartbeatRequestShape', ],
            'output' => [ 'shape' => 'K8sAgentHeartbeatResponseShape', ],
        ],
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
        'DeleteCollectInfo' => [
            'name' => 'DeleteCollectInfo',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}',
            ],
            'input' => [ 'shape' => 'DeleteCollectInfoRequestShape', ],
            'output' => [ 'shape' => 'DeleteCollectInfoResponseShape', ],
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
        'UpdateCollectInfoStatus' => [
            'name' => 'UpdateCollectInfoStatus',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUID}:switch',
            ],
            'input' => [ 'shape' => 'UpdateCollectInfoStatusRequestShape', ],
            'output' => [ 'shape' => 'UpdateCollectInfoStatusResponseShape', ],
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
        'DescribeCollectInfoBatch' => [
            'name' => 'DescribeCollectInfoBatch',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/collectinfos/{collectInfoUIDs}:batch',
            ],
            'input' => [ 'shape' => 'DescribeCollectInfoBatchRequestShape', ],
            'output' => [ 'shape' => 'DescribeCollectInfoBatchResponseShape', ],
        ],
        'DescribeCollectInfos' => [
            'name' => 'DescribeCollectInfos',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/collectinfos',
            ],
            'input' => [ 'shape' => 'DescribeCollectInfosRequestShape', ],
            'output' => [ 'shape' => 'DescribeCollectInfosResponseShape', ],
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
        'Search' => [
            'name' => 'Search',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logsets/{logsetUID}/logtopics/{logtopicUID}/search',
            ],
            'input' => [ 'shape' => 'SearchRequestShape', ],
            'output' => [ 'shape' => 'SearchResponseShape', ],
        ],
        'DescribeIndexOption' => [
            'name' => 'DescribeIndexOption',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/indexoptions',
            ],
            'input' => [ 'shape' => 'DescribeIndexOptionRequestShape', ],
            'output' => [ 'shape' => 'DescribeIndexOptionResponseShape', ],
        ],
        'CreateIndexOption' => [
            'name' => 'CreateIndexOption',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/indexoptions',
            ],
            'input' => [ 'shape' => 'CreateIndexOptionRequestShape', ],
            'output' => [ 'shape' => 'CreateIndexOptionResponseShape', ],
        ],
        'UpdateIndexOption' => [
            'name' => 'UpdateIndexOption',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/indexoptions',
            ],
            'input' => [ 'shape' => 'UpdateIndexOptionRequestShape', ],
            'output' => [ 'shape' => 'UpdateIndexOptionResponseShape', ],
        ],
        'DeleteIndexOption' => [
            'name' => 'DeleteIndexOption',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/indexoptions',
            ],
            'input' => [ 'shape' => 'DeleteIndexOptionRequestShape', ],
            'output' => [ 'shape' => 'DeleteIndexOptionResponseShape', ],
        ],
        'InstanceCollectConfigList' => [
            'name' => 'InstanceCollectConfigList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/instanceCollectConfigList',
            ],
            'input' => [ 'shape' => 'InstanceCollectConfigListRequestShape', ],
            'output' => [ 'shape' => 'InstanceCollectConfigListResponseShape', ],
        ],
        'InstanceCollectConfigModify' => [
            'name' => 'InstanceCollectConfigModify',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/instanceCollectConfigModify',
            ],
            'input' => [ 'shape' => 'InstanceCollectConfigModifyRequestShape', ],
            'output' => [ 'shape' => 'InstanceCollectConfigModifyResponseShape', ],
        ],
        'K8sWatchHeartbeat' => [
            'name' => 'K8sWatchHeartbeat',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/k8sWatchHeartbeat',
            ],
            'input' => [ 'shape' => 'K8sWatchHeartbeatRequestShape', ],
            'output' => [ 'shape' => 'K8sWatchHeartbeatResponseShape', ],
        ],
        'LogSearchId' => [
            'name' => 'LogSearchId',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logSearchId',
            ],
            'input' => [ 'shape' => 'LogSearchIdRequestShape', ],
            'output' => [ 'shape' => 'LogSearchIdResponseShape', ],
        ],
        'LogSearch' => [
            'name' => 'LogSearch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logSearch',
            ],
            'input' => [ 'shape' => 'LogSearchRequestShape', ],
            'output' => [ 'shape' => 'LogSearchResponseShape', ],
        ],
        'CreateLogDownloadTask' => [
            'name' => 'CreateLogDownloadTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/downloadtask',
            ],
            'input' => [ 'shape' => 'CreateLogDownloadTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateLogDownloadTaskResponseShape', ],
        ],
        'CancelLogDownloadTask' => [
            'name' => 'CancelLogDownloadTask',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/downloadtask/{downloadTaskUID}/cancel',
            ],
            'input' => [ 'shape' => 'CancelLogDownloadTaskRequestShape', ],
            'output' => [ 'shape' => 'CancelLogDownloadTaskResponseShape', ],
        ],
        'GetLogDownloadTasks' => [
            'name' => 'GetLogDownloadTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logtopics/{logtopicUID}/downloadtasks',
            ],
            'input' => [ 'shape' => 'GetLogDownloadTasksRequestShape', ],
            'output' => [ 'shape' => 'GetLogDownloadTasksResponseShape', ],
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
        'DescribeLogtopicsGlobal' => [
            'name' => 'DescribeLogtopicsGlobal',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/logtopics',
            ],
            'input' => [ 'shape' => 'DescribeLogtopicsGlobalRequestShape', ],
            'output' => [ 'shape' => 'DescribeLogtopicsGlobalResponseShape', ],
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
        'K8sDispatchConf' => [
            'name' => 'K8sDispatchConf',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/k8sconfig',
            ],
            'input' => [ 'shape' => 'K8sDispatchConfRequestShape', ],
            'output' => [ 'shape' => 'K8sDispatchConfResponseShape', ],
        ],
        'K8sDispatchConfNew' => [
            'name' => 'K8sDispatchConfNew',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/k8sconfigNew',
            ],
            'input' => [ 'shape' => 'K8sDispatchConfNewRequestShape', ],
            'output' => [ 'shape' => 'K8sDispatchConfNewResponseShape', ],
        ],
        'K8sconfigNewV2' => [
            'name' => 'K8sconfigNewV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/k8sconfigNewV2',
            ],
            'input' => [ 'shape' => 'K8sconfigNewV2RequestShape', ],
            'output' => [ 'shape' => 'K8sconfigNewV2ResponseShape', ],
        ],
        'LogDetailPublic' => [
            'name' => 'LogDetailPublic',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logDetail/{product}/instance/{instance}',
            ],
            'input' => [ 'shape' => 'LogDetailPublicRequestShape', ],
            'output' => [ 'shape' => 'LogDetailPublicResponseShape', ],
        ],
        'LogDetail' => [
            'name' => 'LogDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logDetail',
            ],
            'input' => [ 'shape' => 'LogDetailRequestShape', ],
            'output' => [ 'shape' => 'LogDetailResponseShape', ],
        ],
        'LogAggregate' => [
            'name' => 'LogAggregate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logAggregate',
            ],
            'input' => [ 'shape' => 'LogAggregateRequestShape', ],
            'output' => [ 'shape' => 'LogAggregateResponseShape', ],
        ],
        'LogCount' => [
            'name' => 'LogCount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logCount',
            ],
            'input' => [ 'shape' => 'LogCountRequestShape', ],
            'output' => [ 'shape' => 'LogCountResponseShape', ],
        ],
        'ProductPodChange' => [
            'name' => 'ProductPodChange',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/productPodChange',
            ],
            'input' => [ 'shape' => 'ProductPodChangeRequestShape', ],
            'output' => [ 'shape' => 'ProductPodChangeResponseShape', ],
        ],
        'ProductPodLabelSelect' => [
            'name' => 'ProductPodLabelSelect',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/productPodLabelSelect',
            ],
            'input' => [ 'shape' => 'ProductPodLabelSelectRequestShape', ],
            'output' => [ 'shape' => 'ProductPodLabelSelectResponseShape', ],
        ],
        'Push' => [
            'name' => 'Push',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logtopics/{logtopicUID}:push',
            ],
            'input' => [ 'shape' => 'PushRequestShape', ],
            'output' => [ 'shape' => 'PushResponseShape', ],
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
        'BinlogSpec' => [
            'type' => 'structure',
            'members' => [
                'addr' => [ 'type' => 'string', 'locationName' => 'addr', ],
                'binlogFile' => [ 'type' => 'string', 'locationName' => 'binlogFile', ],
                'binlogPos' => [ 'type' => 'uint32', 'locationName' => 'binlogPos', ],
                'charset' => [ 'type' => 'string', 'locationName' => 'charset', ],
                'enableDDL' => [ 'type' => 'boolean', 'locationName' => 'enableDDL', ],
                'enableDelete' => [ 'type' => 'boolean', 'locationName' => 'enableDelete', ],
                'enableInsert' => [ 'type' => 'boolean', 'locationName' => 'enableInsert', ],
                'enableUpdate' => [ 'type' => 'boolean', 'locationName' => 'enableUpdate', ],
                'excludeTables' => [ 'type' => 'string', 'locationName' => 'excludeTables', ],
                'flavor' => [ 'type' => 'string', 'locationName' => 'flavor', ],
                'inOrder' => [ 'type' => 'boolean', 'locationName' => 'inOrder', ],
                'includeTables' => [ 'type' => 'string', 'locationName' => 'includeTables', ],
                'pass' => [ 'type' => 'string', 'locationName' => 'pass', ],
                'port' => [ 'type' => 'long', 'locationName' => 'port', ],
                'professionalMode' => [ 'type' => 'boolean', 'locationName' => 'professionalMode', ],
                'serverID' => [ 'type' => 'uint32', 'locationName' => 'serverID', ],
                'textToString' => [ 'type' => 'boolean', 'locationName' => 'textToString', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
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
        'CollectInfoBasicEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'filePathPreview' => [ 'type' => 'string', 'locationName' => 'filePathPreview', ],
                'logtopicName' => [ 'type' => 'string', 'locationName' => 'logtopicName', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'rulePreview' => [ 'type' => 'string', 'locationName' => 'rulePreview', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'CollectInfoDetailEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResourceEnd', ], ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'binlogSpec' => [ 'type' => 'object', 'locationName' => 'binlogSpec', ],
                'detail' =>  [ 'shape' => 'CollectTempalteEnd', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'k8sSpec' => [ 'type' => 'object', 'locationName' => 'k8sSpec', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
                'formula' => [ 'type' => 'string', 'locationName' => 'formula', ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
            ],
        ],
        'K8sSpec' => [
            'type' => 'structure',
            'members' => [
                'clusterID' => [ 'type' => 'string', 'locationName' => 'clusterID', ],
                'containerFileSpec' =>  [ 'shape' => 'K8sContainerFileSpec', ],
                'fileType' => [ 'type' => 'string', 'locationName' => 'fileType', ],
                'hostFileSpec' =>  [ 'shape' => 'K8sHostFileSpec', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'stdoutSpec' =>  [ 'shape' => 'K8sStdoutSpec', ],
            ],
        ],
        'K8sHostFileSpec' => [
            'type' => 'structure',
            'members' => [
                'filePattern' => [ 'type' => 'string', 'locationName' => 'filePattern', ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
            ],
        ],
        'WorkLoadSpec' => [
            'type' => 'structure',
            'members' => [
                'container' => [ 'type' => 'string', 'locationName' => 'container', ],
                'kind' => [ 'type' => 'string', 'locationName' => 'kind', ],
                'labelSelectorSpec' =>  [ 'shape' => 'K8sLabelSelectorSpec', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
            ],
        ],
        'K8sNameSpaceSelectorSpec' => [
            'type' => 'structure',
            'members' => [
                'allNamespace' => [ 'type' => 'boolean', 'locationName' => 'allNamespace', ],
                'excludeNamespace' => [ 'type' => 'string', 'locationName' => 'excludeNamespace', ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
            ],
        ],
        'K8sContainerFileSpec' => [
            'type' => 'structure',
            'members' => [
                'filePattern' => [ 'type' => 'string', 'locationName' => 'filePattern', ],
                'labelSelectorSpec' =>  [ 'shape' => 'K8sLabelSelectorSpec', ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'nameSpaceSelectorSpec' =>  [ 'shape' => 'K8sNameSpaceSelectorSpec', ],
                'selectorType' => [ 'type' => 'string', 'locationName' => 'selectorType', ],
                'workLoads' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkLoadSpec', ], ],
            ],
        ],
        'K8sStdoutSpec' => [
            'type' => 'structure',
            'members' => [
                'container' => [ 'type' => 'string', 'locationName' => 'container', ],
                'labelSelectorSpec' =>  [ 'shape' => 'K8sLabelSelectorSpec', ],
                'nameSpaceSelectorSpec' =>  [ 'shape' => 'K8sNameSpaceSelectorSpec', ],
                'selectorType' => [ 'type' => 'string', 'locationName' => 'selectorType', ],
                'workLoads' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkLoadSpec', ], ],
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
                'binlogSpec' =>  [ 'shape' => 'BinlogSpec', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'k8sSpec' =>  [ 'shape' => 'K8sSpec', ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagResource' =>  [ 'shape' => 'TagResource', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
            ],
        ],
        'K8sLabelSelectorSpec' => [
            'type' => 'structure',
            'members' => [
                'container' => [ 'type' => 'string', 'locationName' => 'container', ],
                'excludeLabels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'includeLabels' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'enableStatistics' => [ 'type' => 'boolean', 'locationName' => 'enableStatistics', ],
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
                'indexToken' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParserField', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
                'reserveOriginContent' => [ 'type' => 'boolean', 'locationName' => 'reserveOriginContent', ],
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
        'CreateWebConfEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
            ],
        ],
        'CreateWebConfReq' => [
            'type' => 'structure',
            'members' => [
                'confType' => [ 'type' => 'string', 'locationName' => 'confType', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
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
        'DescribeWebConfsResponseEnd' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebConfEnd', ], ],
            ],
        ],
        'WebConfEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'confType' => [ 'type' => 'string', 'locationName' => 'confType', ],
                'data' => [ 'type' => 'string', 'locationName' => 'data', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'DestConf' => [
            'type' => 'structure',
            'members' => [
                'custom' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomConf', ], ],
                'jcloud' => [ 'type' => 'boolean', 'locationName' => 'jcloud', ],
            ],
        ],
        'DispatchConf' => [
            'type' => 'structure',
            'members' => [
                'tenantName' => [ 'type' => 'string', 'locationName' => 'tenantName', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'conf' => [ 'type' => 'string', 'locationName' => 'conf', ],
            ],
        ],
        'DispatchConfNew' => [
            'type' => 'structure',
            'members' => [
                'tenantName' => [ 'type' => 'string', 'locationName' => 'tenantName', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'conf' => [ 'type' => 'string', 'locationName' => 'conf', ],
                'cloud' => [ 'type' => 'boolean', 'locationName' => 'cloud', ],
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
        'FieldIndexOption' => [
            'type' => 'structure',
            'members' => [
                'alias' => [ 'type' => 'string', 'locationName' => 'alias', ],
                'caseSensitive' => [ 'type' => 'boolean', 'locationName' => 'caseSensitive', ],
                'chn' => [ 'type' => 'boolean', 'locationName' => 'chn', ],
                'fieldName' => [ 'type' => 'string', 'locationName' => 'fieldName', ],
                'jsonKey' => [ 'type' => 'string', 'locationName' => 'jsonKey', ],
                'statistics' => [ 'type' => 'boolean', 'locationName' => 'statistics', ],
                'token' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'valueType' => [ 'type' => 'string', 'locationName' => 'valueType', ],
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
        'FormatFilter' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'filter' => [ 'type' => 'list', 'member' => [ 'shape' => 'FormatSelector', ], ],
            ],
        ],
        'FormatSelector' => [
            'type' => 'structure',
            'members' => [
                'k' => [ 'type' => 'string', 'locationName' => 'k', ],
                'v' => [ 'type' => 'object', 'locationName' => 'v', ],
                'exp' => [ 'type' => 'string', 'locationName' => 'exp', ],
                'op' => [ 'type' => 'string', 'locationName' => 'op', ],
                'union' =>  [ 'shape' => 'FormatSelector', ],
            ],
        ],
        'InstanceCollectConfigInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'filepath' => [ 'type' => 'string', 'locationName' => 'filepath', ],
                'status' => [ 'type' => 'int2', 'locationName' => 'status', ],
            ],
        ],
        'InstanceCollectConfigModifyParam' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'configs' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceCollectConfigInfo', ], ],
            ],
        ],
        'InstanceCollectConfigParam' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
            ],
        ],
        'JdcloudSpec' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
            ],
        ],
        'K8sWatchHeartbeat' => [
            'type' => 'structure',
            'members' => [
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'devId' => [ 'type' => 'string', 'locationName' => 'devId', ],
                'cloud' => [ 'type' => 'boolean', 'locationName' => 'cloud', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'containerCount' => [ 'type' => 'integer', 'locationName' => 'containerCount', ],
                'latestPodChangeTime' => [ 'type' => 'long', 'locationName' => 'latestPodChangeTime', ],
            ],
        ],
        'LineFilter' => [
            'type' => 'structure',
            'members' => [
                'keywords' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'excludeWords' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regex' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'excludeRegex' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'StreamFilter' => [
            'type' => 'structure',
            'members' => [
                'k' => [ 'type' => 'string', 'locationName' => 'k', ],
                'v' => [ 'type' => 'string', 'locationName' => 'v', ],
                'exp' => [ 'type' => 'string', 'locationName' => 'exp', ],
            ],
        ],
        'LokiMetricParam' => [
            'type' => 'structure',
            'members' => [
                'rangeFun' =>  [ 'shape' => 'LokiMetricRangeFun', ],
                'aggOpName' => [ 'type' => 'string', 'locationName' => 'aggOpName', ],
                'orderBy' => [ 'type' => 'string', 'locationName' => 'orderBy', ],
            ],
        ],
        'LogCountOrAggregateSearchParam' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'podName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
                'filePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'step' => [ 'type' => 'float', 'locationName' => 'step', ],
                'streamFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamFilter', ], ],
                'lineFilter' =>  [ 'shape' => 'LineFilter', ],
                'fmtFilter' =>  [ 'shape' => 'FormatFilter', ],
                'metric' =>  [ 'shape' => 'LokiMetricParam', ],
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'groupBy' => [ 'type' => 'string', 'locationName' => 'groupBy', ],
            ],
        ],
        'LokiMetricRangeFun' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'param' => [ 'type' => 'integer', 'locationName' => 'param', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
            ],
        ],
        'LogDetailPublicSearchParam' => [
            'type' => 'structure',
            'members' => [
                'searchId' => [ 'type' => 'string', 'locationName' => 'searchId', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'podName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
                'filePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'step' => [ 'type' => 'float', 'locationName' => 'step', ],
                'streamFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamFilter', ], ],
                'lineFilter' =>  [ 'shape' => 'LineFilter', ],
                'fmtFilter' =>  [ 'shape' => 'FormatFilter', ],
            ],
        ],
        'LogDetailSearchParam' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'searchId' => [ 'type' => 'string', 'locationName' => 'searchId', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'podName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
                'filePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'step' => [ 'type' => 'float', 'locationName' => 'step', ],
                'streamFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamFilter', ], ],
                'lineFilter' =>  [ 'shape' => 'LineFilter', ],
                'fmtFilter' =>  [ 'shape' => 'FormatFilter', ],
            ],
        ],
        'LogDownloadTask' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'compress' => [ 'type' => 'int8', 'locationName' => 'compress', ],
                'consumeTime' => [ 'type' => 'double', 'locationName' => 'consumeTime', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'downloadPath' => [ 'type' => 'string', 'locationName' => 'downloadPath', ],
                'endTimestamp' => [ 'type' => 'long', 'locationName' => 'endTimestamp', ],
                'fileSize' => [ 'type' => 'double', 'locationName' => 'fileSize', ],
                'fileSort' => [ 'type' => 'int8', 'locationName' => 'fileSort', ],
                'format' => [ 'type' => 'int8', 'locationName' => 'format', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'logCount' => [ 'type' => 'long', 'locationName' => 'logCount', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'quote' => [ 'type' => 'int8', 'locationName' => 'quote', ],
                'retry' => [ 'type' => 'int8', 'locationName' => 'retry', ],
                'startTimestamp' => [ 'type' => 'long', 'locationName' => 'startTimestamp', ],
                'status' => [ 'type' => 'int8', 'locationName' => 'status', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'LogDownloadTasksEnd' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogDownloadTask', ], ],
            ],
        ],
        'LogInfo' => [
            'type' => 'structure',
            'members' => [
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'timestamp' => [ 'type' => 'string', 'locationName' => 'timestamp', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'level' => [ 'type' => 'string', 'locationName' => 'level', ],
                'traceId' => [ 'type' => 'string', 'locationName' => 'traceId', ],
                'filePath' => [ 'type' => 'string', 'locationName' => 'filePath', ],
                '_expanded' => [ 'type' => 'string', 'locationName' => '_expanded', ],
                't_h_r' => [ 'type' => 'string', 'locationName' => 't_h_r', ],
                'c_l_s' => [ 'type' => 'string', 'locationName' => 'c_l_s', ],
                'm_s_g' => [ 'type' => 'string', 'locationName' => 'm_s_g', ],
            ],
        ],
        'LogParserFieldEnd' => [
            'type' => 'structure',
            'members' => [
                'enableStatistics' => [ 'type' => 'boolean', 'locationName' => 'enableStatistics', ],
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
        'Condition' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'apps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'exclude' => [ 'type' => 'string', 'locationName' => 'exclude', ],
                'hosts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filePaths' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logLevel' => [ 'type' => 'string', 'locationName' => 'logLevel', ],
                'thread' => [ 'type' => 'string', 'locationName' => 'thread', ],
                'clazz' => [ 'type' => 'string', 'locationName' => 'clazz', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'logTypeName' => [ 'type' => 'string', 'locationName' => 'logTypeName', ],
                'chunks' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'searchId' => [ 'type' => 'string', 'locationName' => 'searchId', ],
                'searchIndex' => [ 'type' => 'integer', 'locationName' => 'searchIndex', ],
                'searchEndTime' => [ 'type' => 'long', 'locationName' => 'searchEndTime', ],
                'lifecycle' => [ 'type' => 'integer', 'locationName' => 'lifecycle', ],
                'querySql' => [ 'type' => 'string', 'locationName' => 'querySql', ],
                'indexParams' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
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
                'resourceGroupUID' => [ 'type' => 'string', 'locationName' => 'resourceGroupUID', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'LogtopicBaseEnd' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'inOrder' => [ 'type' => 'boolean', 'locationName' => 'inOrder', ],
                'logsetName' => [ 'type' => 'string', 'locationName' => 'logsetName', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
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
                'inOrder' => [ 'type' => 'boolean', 'locationName' => 'inOrder', ],
                'lastRecordTime' => [ 'type' => 'string', 'locationName' => 'lastRecordTime', ],
                'lifeCycle' => [ 'type' => 'long', 'locationName' => 'lifeCycle', ],
                'logsetName' => [ 'type' => 'string', 'locationName' => 'logsetName', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'prePattern' => [ 'type' => 'string', 'locationName' => 'prePattern', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'LokiResponseData' => [
            'type' => 'structure',
            'members' => [
                'resultType' => [ 'type' => 'string', 'locationName' => 'resultType', ],
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'LokiResponseResult', ], ],
                'stats' =>  [ 'shape' => 'LokiResponseStats', ],
            ],
        ],
        'LokiResponseSummary' => [
            'type' => 'structure',
            'members' => [
                'execTime' => [ 'type' => 'float', 'locationName' => 'execTime', ],
            ],
        ],
        'LokiResponseStats' => [
            'type' => 'structure',
            'members' => [
                'summary' =>  [ 'shape' => 'LokiResponseSummary', ],
                'chunkHit' =>  [ 'shape' => 'LokiResponseStatsChunkHit', ],
            ],
        ],
        'LokiResponseStatsChunkHit' => [
            'type' => 'structure',
            'members' => [
                'hit' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'miss' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'PodLabelSelect' => [
            'type' => 'structure',
            'members' => [
                'operate' => [ 'type' => 'string', 'locationName' => 'operate', ],
                'podInfo' => [ 'type' => 'string', 'locationName' => 'podInfo', ],
                'tenant' => [ 'type' => 'string', 'locationName' => 'tenant', ],
                'podListStr' => [ 'type' => 'string', 'locationName' => 'podListStr', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'allTenantDistributability' => [ 'type' => 'boolean', 'locationName' => 'allTenantDistributability', ],
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
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
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
                'binlogSpec' =>  [ 'shape' => 'BinlogSpec', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'k8sSpec' =>  [ 'shape' => 'K8sSpec', ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regexpStr' => [ 'type' => 'string', 'locationName' => 'regexpStr', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
                'tagResource' =>  [ 'shape' => 'TagResource', ],
            ],
        ],
        'UpdateCollectInfoStatusSpec' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
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
                'indexToken' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParserField', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
                'reserveOriginContent' => [ 'type' => 'boolean', 'locationName' => 'reserveOriginContent', ],
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
                'reserveOriginContent' => [ 'type' => 'boolean', 'locationName' => 'reserveOriginContent', ],
            ],
        ],
        'K8sAgentHeartbeatResponseShape' => [
            'type' => 'structure',
            'members' => [
                'ingestCommand' =>  [ 'shape' => 'K8sAgentHeartbeatResultShape', ],
                'heartbeatIntervalMinute' => [ 'type' => 'integer', 'locationName' => 'heartbeatIntervalMinute', ],
            ],
        ],
        'HeartBeatRequest' => [
            'type' => 'structure',
            'members' => [
                'agent_ip' => [ 'type' => 'string', 'locationName' => 'agent_ip', ],
                'agent_type' => [ 'type' => 'string', 'locationName' => 'agent_type', ],
                'node' => [ 'type' => 'string', 'locationName' => 'node', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'conf_version' => [ 'type' => 'string', 'locationName' => 'conf_version', ],
                'devId' => [ 'type' => 'string', 'locationName' => 'devId', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'zone' => [ 'type' => 'string', 'locationName' => 'zone', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'agentUrl' => [ 'type' => 'string', 'locationName' => 'agentUrl', ],
                'nodeName' => [ 'type' => 'string', 'locationName' => 'nodeName', ],
                'commandChannel' => [ 'type' => 'string', 'locationName' => 'commandChannel', ],
                'commandExecuteMethod' => [ 'type' => 'string', 'locationName' => 'commandExecuteMethod', ],
                'maxConfVersion' => [ 'type' => 'string', 'locationName' => 'maxConfVersion', ],
                'agentVersion' => [ 'type' => 'string', 'locationName' => 'agentVersion', ],
                'source' => [ 'type' => 'string', 'locationName' => 'source', ],
            ],
        ],
        'K8sAgentHeartbeatResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'K8sAgentHeartbeatRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateCollectInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
            ],
        ],
        'DescribeCollectInfosRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'DeleteCollectInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
            ],
        ],
        'UpdateCollectInfoStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateParserRequestShape' => [
            'type' => 'structure',
            'members' => [
                'indexToken' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParserField', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
                'reserveOriginContent' => [ 'type' => 'boolean', 'locationName' => 'reserveOriginContent', ],
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
        'DeleteCollectInfoResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateCollectInfoStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'collectInfoUID' => [ 'type' => 'string', 'locationName' => 'collectInfoUID', ],
            ],
        ],
        'DescribeCollectInfosResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCollectInfosResultShape', ],
            ],
        ],
        'DescribeCollectInfoBatchResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectInfoBasicEnd', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeCollectInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResourceEnd', ], ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'binlogSpec' => [ 'type' => 'object', 'locationName' => 'binlogSpec', ],
                'detail' =>  [ 'shape' => 'CollectTempalteEnd', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'hasResource' => [ 'type' => 'boolean', 'locationName' => 'hasResource', ],
                'k8sSpec' => [ 'type' => 'object', 'locationName' => 'k8sSpec', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'resourceMode' => [ 'type' => 'long', 'locationName' => 'resourceMode', ],
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'tagResource' =>  [ 'shape' => 'TagResourceEnd', ],
                'templateName' => [ 'type' => 'string', 'locationName' => 'templateName', ],
                'templateUID' => [ 'type' => 'string', 'locationName' => 'templateUID', ],
            ],
        ],
        'UpdateParserResultShape' => [
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
        'DescribeCollectInfoBatchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeCollectInfoBatchResultShape', ],
            ],
        ],
        'CreateCollectInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'agResource' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgResource', ], ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'binlogSpec' =>  [ 'shape' => 'BinlogSpec', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'k8sSpec' =>  [ 'shape' => 'K8sSpec', ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
        'UpdateCollectInfoStatusResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'binlogSpec' =>  [ 'shape' => 'BinlogSpec', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'filterEnabled' => [ 'type' => 'boolean', 'locationName' => 'filterEnabled', ],
                'k8sSpec' =>  [ 'shape' => 'K8sSpec', ],
                'logFile' => [ 'type' => 'string', 'locationName' => 'logFile', ],
                'logFilters' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logPath' => [ 'type' => 'string', 'locationName' => 'logPath', ],
                'logtopicEnabled' => [ 'type' => 'boolean', 'locationName' => 'logtopicEnabled', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
        'DeleteCollectInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCollectInfoBatchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'collectInfoUIDs' => [ 'type' => 'string', 'locationName' => 'collectInfoUIDs', ],
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
                'indexToken' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'parserFields' => [ 'type' => 'list', 'member' => [ 'shape' => 'ParserField', ], ],
                'parserMode' => [ 'type' => 'string', 'locationName' => 'parserMode', ],
                'parserPattern' => [ 'type' => 'string', 'locationName' => 'parserPattern', ],
                'parserSample' => [ 'type' => 'string', 'locationName' => 'parserSample', ],
                'pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'PipelineSpec', ], ],
                'reserveOriginContent' => [ 'type' => 'boolean', 'locationName' => 'reserveOriginContent', ],
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
                'reserveOriginContent' => [ 'type' => 'boolean', 'locationName' => 'reserveOriginContent', ],
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
        'DescribeCollectInfosResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'CollectInfoBasicEnd', ], ],
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
            ],
        ],
        'UpdateCollectResourcesResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SearchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SearchResultShape', ],
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
        'UpdateIndexOptionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateIndexOptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIndexOptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeIndexOptionResultShape', ],
            ],
        ],
        'DescribeIndexOptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'DeleteIndexOptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIndexOptionResultShape' => [
            'type' => 'structure',
            'members' => [
                'caseSensitive' => [ 'type' => 'boolean', 'locationName' => 'caseSensitive', ],
                'chn' => [ 'type' => 'boolean', 'locationName' => 'chn', ],
                'fieldIndexOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'FieldIndexOption', ], ],
                'fulltextIndex' => [ 'type' => 'boolean', 'locationName' => 'fulltextIndex', ],
                'logReduce' => [ 'type' => 'boolean', 'locationName' => 'logReduce', ],
                'maxTextLen' => [ 'type' => 'long', 'locationName' => 'maxTextLen', ],
                'token' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
            ],
        ],
        'DeleteIndexOptionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateIndexOptionResultShape' => [
            'type' => 'structure',
            'members' => [
                'uID' => [ 'type' => 'string', 'locationName' => 'uID', ],
            ],
        ],
        'CreateIndexOptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'logReduce' => [ 'type' => 'boolean', 'locationName' => 'logReduce', ],
                'fulltextIndex' => [ 'type' => 'boolean', 'locationName' => 'fulltextIndex', ],
                'caseSensitive' => [ 'type' => 'boolean', 'locationName' => 'caseSensitive', ],
                'chn' => [ 'type' => 'boolean', 'locationName' => 'chn', ],
                'token' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'fieldIndexOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'FieldIndexOption', ], ],
                'maxTextLen' => [ 'type' => 'long', 'locationName' => 'maxTextLen', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'CreateIndexOptionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateIndexOptionResultShape', ],
            ],
        ],
        'DeleteIndexOptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'UpdateIndexOptionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'logReduce' => [ 'type' => 'boolean', 'locationName' => 'logReduce', ],
                'fulltextIndex' => [ 'type' => 'boolean', 'locationName' => 'fulltextIndex', ],
                'caseSensitive' => [ 'type' => 'boolean', 'locationName' => 'caseSensitive', ],
                'chn' => [ 'type' => 'boolean', 'locationName' => 'chn', ],
                'token' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'fieldIndexOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'FieldIndexOption', ], ],
                'maxTextLen' => [ 'type' => 'long', 'locationName' => 'maxTextLen', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'InstanceCollectConfigModifyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'configs' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceCollectConfigInfo', ], ],
            ],
        ],
        'InstanceCollectConfigListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
            ],
        ],
        'InstanceCollectConfigListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceCollectConfigInfo', ], ],
            ],
        ],
        'InstanceCollectConfigModifyResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'string', 'locationName' => 'result', ],
            ],
        ],
        'InstanceCollectConfigModifyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'InstanceCollectConfigModifyResultShape', ],
            ],
        ],
        'InstanceCollectConfigListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'InstanceCollectConfigListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'K8sWatchHeartbeatRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'devId' => [ 'type' => 'string', 'locationName' => 'devId', ],
                'cloud' => [ 'type' => 'boolean', 'locationName' => 'cloud', ],
                'nodeCount' => [ 'type' => 'integer', 'locationName' => 'nodeCount', ],
                'containerCount' => [ 'type' => 'integer', 'locationName' => 'containerCount', ],
                'latestPodChangeTime' => [ 'type' => 'long', 'locationName' => 'latestPodChangeTime', ],
            ],
        ],
        'K8sWatchHeartbeatResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'K8sWatchHeartbeatResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'K8sWatchHeartbeatResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'LogSearchIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LogSearchIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LogSearchIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'searchId' => [ 'type' => 'string', 'locationName' => 'searchId', ],
            ],
        ],
        'LogSearchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'searchId' => [ 'type' => 'string', 'locationName' => 'searchId', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
            ],
        ],
        'LogSearchResultShape' => [
            'type' => 'structure',
            'members' => [
                'completed' => [ 'type' => 'boolean', 'locationName' => 'completed', ],
                'logs' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogInfo', ], ],
            ],
        ],
        'LogSearchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'LogSearchResultShape', ],
            ],
        ],
        'LogSearchIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'apps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'exclude' => [ 'type' => 'string', 'locationName' => 'exclude', ],
                'hosts' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'filePaths' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logLevel' => [ 'type' => 'string', 'locationName' => 'logLevel', ],
                'thread' => [ 'type' => 'string', 'locationName' => 'thread', ],
                'clazz' => [ 'type' => 'string', 'locationName' => 'clazz', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'logTypeName' => [ 'type' => 'string', 'locationName' => 'logTypeName', ],
                'chunks' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'searchId' => [ 'type' => 'string', 'locationName' => 'searchId', ],
                'searchIndex' => [ 'type' => 'integer', 'locationName' => 'searchIndex', ],
                'searchEndTime' => [ 'type' => 'long', 'locationName' => 'searchEndTime', ],
                'lifecycle' => [ 'type' => 'integer', 'locationName' => 'lifecycle', ],
                'querySql' => [ 'type' => 'string', 'locationName' => 'querySql', ],
                'indexParams' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'CancelLogDownloadTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
                'downloadTaskUID' => [ 'type' => 'string', 'locationName' => 'downloadTaskUID', ],
            ],
        ],
        'CancelLogDownloadTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'downloadTaskUID' => [ 'type' => 'string', 'locationName' => 'downloadTaskUID', ],
            ],
        ],
        'CreateLogDownloadTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'compress' => [ 'type' => 'int8', 'locationName' => 'compress', ],
                'format' => [ 'type' => 'int8', 'locationName' => 'format', ],
                'logCount' => [ 'type' => 'long', 'locationName' => 'logCount', ],
                'quote' => [ 'type' => 'int8', 'locationName' => 'quote', ],
                'fileSort' => [ 'type' => 'int8', 'locationName' => 'fileSort', ],
                'startTimestamp' => [ 'type' => 'long', 'locationName' => 'startTimestamp', ],
                'endTimestamp' => [ 'type' => 'long', 'locationName' => 'endTimestamp', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'CreateLogDownloadTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'downloadTaskUID' => [ 'type' => 'string', 'locationName' => 'downloadTaskUID', ],
            ],
        ],
        'GetLogDownloadTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'GetLogDownloadTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogDownloadTask', ], ],
            ],
        ],
        'CancelLogDownloadTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CancelLogDownloadTaskResultShape', ],
            ],
        ],
        'CreateLogDownloadTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateLogDownloadTaskResultShape', ],
            ],
        ],
        'GetLogDownloadTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetLogDownloadTasksResultShape', ],
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
                'resourceGroupUID' => [ 'type' => 'string', 'locationName' => 'resourceGroupUID', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
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
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupUID' => [ 'type' => 'string', 'locationName' => 'resourceGroupUID', ],
                'inner' => [ 'type' => 'boolean', 'locationName' => 'inner', ],
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
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'resourceGroupIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateLogsetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'lifeCycle' => [ 'type' => 'long', 'locationName' => 'lifeCycle', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
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
                'inOrder' => [ 'type' => 'boolean', 'locationName' => 'inOrder', ],
                'lifeCycle' => [ 'type' => 'long', 'locationName' => 'lifeCycle', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
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
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
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
        'DescribeLogtopicsGlobalResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeLogtopicsGlobalResultShape', ],
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
                'inOrder' => [ 'type' => 'boolean', 'locationName' => 'inOrder', ],
                'lifeCycle' => [ 'type' => 'long', 'locationName' => 'lifeCycle', ],
                'logsetName' => [ 'type' => 'string', 'locationName' => 'logsetName', ],
                'logsetUID' => [ 'type' => 'string', 'locationName' => 'logsetUID', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'prePattern' => [ 'type' => 'string', 'locationName' => 'prePattern', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'UpdateLogtopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'lifeCycle' => [ 'type' => 'long', 'locationName' => 'lifeCycle', ],
                'inOrder' => [ 'type' => 'boolean', 'locationName' => 'inOrder', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'DescribeLogtopicsGlobalResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogtopicBaseEnd', ], ],
            ],
        ],
        'DescribeLogtopicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'DescribeLogtopicsGlobalRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'K8sDispatchConfRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tenantName' => [ 'type' => 'string', 'locationName' => 'tenantName', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'conf' => [ 'type' => 'string', 'locationName' => 'conf', ],
            ],
        ],
        'K8sDispatchConfResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'K8sDispatchConfResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'K8sDispatchConfResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'K8sDispatchConfNewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tenantName' => [ 'type' => 'string', 'locationName' => 'tenantName', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'conf' => [ 'type' => 'string', 'locationName' => 'conf', ],
            ],
        ],
        'K8sDispatchConfNewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'K8sDispatchConfNewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'K8sDispatchConfNewResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'K8sconfigNewV2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'K8sconfigNewV2ResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'K8sconfigNewV2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'tenantName' => [ 'type' => 'string', 'locationName' => 'tenantName', ],
                'clusterName' => [ 'type' => 'string', 'locationName' => 'clusterName', ],
                'zoneName' => [ 'type' => 'string', 'locationName' => 'zoneName', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'conf' => [ 'type' => 'string', 'locationName' => 'conf', ],
                'cloud' => [ 'type' => 'boolean', 'locationName' => 'cloud', ],
            ],
        ],
        'K8sconfigNewV2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'LogAggregateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'LogAggregateResultShape', ],
            ],
        ],
        'LogCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'LogCountResultShape', ],
            ],
        ],
        'LogAggregateResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'completed' => [ 'type' => 'boolean', 'locationName' => 'completed', ],
                'data' =>  [ 'shape' => 'LokiResponseData', ],
            ],
        ],
        'LogDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LogDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LogDetailPublicRequestShape' => [
            'type' => 'structure',
            'members' => [
                'searchId' => [ 'type' => 'string', 'locationName' => 'searchId', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'podName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
                'filePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'step' => [ 'type' => 'float', 'locationName' => 'step', ],
                'streamFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamFilter', ], ],
                'lineFilter' =>  [ 'shape' => 'LineFilter', ],
                'fmtFilter' =>  [ 'shape' => 'FormatFilter', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
            ],
        ],
        'LogDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'completed' => [ 'type' => 'boolean', 'locationName' => 'completed', ],
                'data' =>  [ 'shape' => 'LokiResponseData', ],
            ],
        ],
        'LogCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'podName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
                'filePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'step' => [ 'type' => 'float', 'locationName' => 'step', ],
                'streamFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamFilter', ], ],
                'lineFilter' =>  [ 'shape' => 'LineFilter', ],
                'fmtFilter' =>  [ 'shape' => 'FormatFilter', ],
                'metric' =>  [ 'shape' => 'LokiMetricParam', ],
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'groupBy' => [ 'type' => 'string', 'locationName' => 'groupBy', ],
            ],
        ],
        'LogDetailPublicResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'completed' => [ 'type' => 'boolean', 'locationName' => 'completed', ],
                'data' =>  [ 'shape' => 'LokiResponseData', ],
            ],
        ],
        'LogDetailPublicResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'LogDetailPublicResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'LogAggregateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'podName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
                'filePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'step' => [ 'type' => 'float', 'locationName' => 'step', ],
                'streamFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamFilter', ], ],
                'lineFilter' =>  [ 'shape' => 'LineFilter', ],
                'fmtFilter' =>  [ 'shape' => 'FormatFilter', ],
                'metric' =>  [ 'shape' => 'LokiMetricParam', ],
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'duration' => [ 'type' => 'string', 'locationName' => 'duration', ],
                'groupBy' => [ 'type' => 'string', 'locationName' => 'groupBy', ],
            ],
        ],
        'LokiResponseResult' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'metric' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'LogDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'searchId' => [ 'type' => 'string', 'locationName' => 'searchId', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'instance' => [ 'type' => 'string', 'locationName' => 'instance', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'podName' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'namespace' => [ 'type' => 'string', 'locationName' => 'namespace', ],
                'cluster' => [ 'type' => 'string', 'locationName' => 'cluster', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
                'filePath' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'step' => [ 'type' => 'float', 'locationName' => 'step', ],
                'streamFilter' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamFilter', ], ],
                'lineFilter' =>  [ 'shape' => 'LineFilter', ],
                'fmtFilter' =>  [ 'shape' => 'FormatFilter', ],
            ],
        ],
        'LogCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'completed' => [ 'type' => 'boolean', 'locationName' => 'completed', ],
                'data' =>  [ 'shape' => 'LokiResponseData', ],
            ],
        ],
        'ProductPodChangeRequest' => [
            'type' => 'structure',
            'members' => [
                'operate' => [ 'type' => 'string', 'locationName' => 'operate', ],
                'podInfo' => [ 'type' => 'string', 'locationName' => 'podInfo', ],
                'tenant' => [ 'type' => 'string', 'locationName' => 'tenant', ],
                'podListStr' => [ 'type' => 'string', 'locationName' => 'podListStr', ],
                'allTenantDistributability' => [ 'type' => 'boolean', 'locationName' => 'allTenantDistributability', ],
            ],
        ],
        'ProductPodChangeResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'ProductPodChangeRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ProductPodChangeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ProductPodChangeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ProductPodLabelSelectResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'boolean', 'locationName' => 'result', ],
            ],
        ],
        'ProductPodLabelSelectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ProductPodLabelSelectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ProductPodLabelSelectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'operate' => [ 'type' => 'string', 'locationName' => 'operate', ],
                'podInfo' => [ 'type' => 'string', 'locationName' => 'podInfo', ],
                'tenant' => [ 'type' => 'string', 'locationName' => 'tenant', ],
                'podListStr' => [ 'type' => 'string', 'locationName' => 'podListStr', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'allTenantDistributability' => [ 'type' => 'boolean', 'locationName' => 'allTenantDistributability', ],
            ],
        ],
        'PushRequestShape' => [
            'type' => 'structure',
            'members' => [
                'logtopicUID' => [ 'type' => 'string', 'locationName' => 'logtopicUID', ],
            ],
        ],
        'PushResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'PushResultShape' => [
            'type' => 'structure',
            'members' => [
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
