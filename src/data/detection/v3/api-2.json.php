<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'detection',
        'protocol' => 'json',
//        'serviceFullName' => 'detection',
//        'serviceId' => 'detection',
    ],
    'operations' => [
        'QueryTasks' => [
            'name' => 'QueryTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v3/tasks',
            ],
            'input' => [ 'shape' => 'QueryTasksRequestShape', ],
            'output' => [ 'shape' => 'QueryTasksResponseShape', ],
        ],
        'QueryNetworkMonitorResults' => [
            'name' => 'QueryNetworkMonitorResults',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v3/netMonitorResult',
            ],
            'input' => [ 'shape' => 'QueryNetworkMonitorResultsRequestShape', ],
            'output' => [ 'shape' => 'QueryNetworkMonitorResultsResponseShape', ],
        ],
        'QueryProtocolMonitorResults' => [
            'name' => 'QueryProtocolMonitorResults',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v3/protocolMonitorResult',
            ],
            'input' => [ 'shape' => 'QueryProtocolMonitorResultsRequestShape', ],
            'output' => [ 'shape' => 'QueryProtocolMonitorResultsResponseShape', ],
        ],
        'QueryProtocolAvgMetrics' => [
            'name' => 'QueryProtocolAvgMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v3/protocolAvgMetrics',
            ],
            'input' => [ 'shape' => 'QueryProtocolAvgMetricsRequestShape', ],
            'output' => [ 'shape' => 'QueryProtocolAvgMetricsResponseShape', ],
        ],
        'QueryNetworkAvgMetrics' => [
            'name' => 'QueryNetworkAvgMetrics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v3/netAvgMetrics',
            ],
            'input' => [ 'shape' => 'QueryNetworkAvgMetricsRequestShape', ],
            'output' => [ 'shape' => 'QueryNetworkAvgMetricsResponseShape', ],
        ],
        'QuerySuccessRateMetric' => [
            'name' => 'QuerySuccessRateMetric',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v3/successRateMetric',
            ],
            'input' => [ 'shape' => 'QuerySuccessRateMetricRequestShape', ],
            'output' => [ 'shape' => 'QuerySuccessRateMetricResponseShape', ],
        ],
    ],
    'shapes' => [
        'NetMetric' => [
            'type' => 'structure',
            'members' => [
                'pingDelay' => [ 'type' => 'long', 'locationName' => 'pingDelay', ],
                'packageLossRate' => [ 'type' => 'double', 'locationName' => 'packageLossRate', ],
                'dnsTime' => [ 'type' => 'long', 'locationName' => 'dnsTime', ],
                'tracertHopCount' => [ 'type' => 'integer', 'locationName' => 'tracertHopCount', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'ProtocolMetric' => [
            'type' => 'structure',
            'members' => [
                'overallTime' => [ 'type' => 'long', 'locationName' => 'overallTime', ],
                'dnsTime' => [ 'type' => 'long', 'locationName' => 'dnsTime', ],
                'sslTime' => [ 'type' => 'long', 'locationName' => 'sslTime', ],
                'tcpTime' => [ 'type' => 'long', 'locationName' => 'tcpTime', ],
                'requestTime' => [ 'type' => 'long', 'locationName' => 'requestTime', ],
                'responseTime' => [ 'type' => 'long', 'locationName' => 'responseTime', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'SuccessRateMetric' => [
            'type' => 'structure',
            'members' => [
                'successRate' => [ 'type' => 'double', 'locationName' => 'successRate', ],
                'failedCount' => [ 'type' => 'long', 'locationName' => 'failedCount', ],
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'Protocol' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'monitorIP' => [ 'type' => 'string', 'locationName' => 'monitorIP', ],
                'monitorISP' => [ 'type' => 'string', 'locationName' => 'monitorISP', ],
                'monitorCountry' => [ 'type' => 'string', 'locationName' => 'monitorCountry', ],
                'monitorProvince' => [ 'type' => 'string', 'locationName' => 'monitorProvince', ],
                'monitorCity' => [ 'type' => 'string', 'locationName' => 'monitorCity', ],
                'monitorDns' => [ 'type' => 'string', 'locationName' => 'monitorDns', ],
                'error' => [ 'type' => 'string', 'locationName' => 'error', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'validResult' => [ 'type' => 'integer', 'locationName' => 'validResult', ],
                'dnsTime' => [ 'type' => 'long', 'locationName' => 'dnsTime', ],
                'tcpTime' => [ 'type' => 'long', 'locationName' => 'tcpTime', ],
                'requestTime' => [ 'type' => 'long', 'locationName' => 'requestTime', ],
                'responseTime' => [ 'type' => 'long', 'locationName' => 'responseTime', ],
                'sslTime' => [ 'type' => 'long', 'locationName' => 'sslTime', ],
                'waitTime' => [ 'type' => 'long', 'locationName' => 'waitTime', ],
                'responseData' => [ 'type' => 'string', 'locationName' => 'responseData', ],
            ],
        ],
        'Net' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'monitorIP' => [ 'type' => 'string', 'locationName' => 'monitorIP', ],
                'monitorISP' => [ 'type' => 'string', 'locationName' => 'monitorISP', ],
                'monitorCountry' => [ 'type' => 'string', 'locationName' => 'monitorCountry', ],
                'monitorProvince' => [ 'type' => 'string', 'locationName' => 'monitorProvince', ],
                'monitorCity' => [ 'type' => 'string', 'locationName' => 'monitorCity', ],
                'monitorDns' => [ 'type' => 'string', 'locationName' => 'monitorDns', ],
                'error' => [ 'type' => 'string', 'locationName' => 'error', ],
                'errorCode' => [ 'type' => 'integer', 'locationName' => 'errorCode', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'dnsRecordType' => [ 'type' => 'string', 'locationName' => 'dnsRecordType', ],
                'dnsAddress' => [ 'type' => 'string', 'locationName' => 'dnsAddress', ],
                'dnsQueryTime' => [ 'type' => 'integer', 'locationName' => 'dnsQueryTime', ],
                'dnsDetail' => [ 'type' => 'string', 'locationName' => 'dnsDetail', ],
                'pingCname' => [ 'type' => 'string', 'locationName' => 'pingCname', ],
                'pingHost' => [ 'type' => 'string', 'locationName' => 'pingHost', ],
                'pingIp' => [ 'type' => 'string', 'locationName' => 'pingIp', ],
                'pingPort' => [ 'type' => 'long', 'locationName' => 'pingPort', ],
                'pingPackets' => [ 'type' => 'integer', 'locationName' => 'pingPackets', ],
                'pingPacketsLoss' => [ 'type' => 'double', 'locationName' => 'pingPacketsLoss', ],
                'pingSuccessPackets' => [ 'type' => 'integer', 'locationName' => 'pingSuccessPackets', ],
                'pingFailPackets' => [ 'type' => 'integer', 'locationName' => 'pingFailPackets', ],
                'pingSize' => [ 'type' => 'integer', 'locationName' => 'pingSize', ],
                'pingAvgTs' => [ 'type' => 'integer', 'locationName' => 'pingAvgTs', ],
                'pingMaxTs' => [ 'type' => 'integer', 'locationName' => 'pingMaxTs', ],
                'pingMinTs' => [ 'type' => 'integer', 'locationName' => 'pingMinTs', ],
                'pingMDevTs' => [ 'type' => 'integer', 'locationName' => 'pingMDevTs', ],
                'pingTsList' => [ 'type' => 'string', 'locationName' => 'pingTsList', ],
                'pingTtlList' => [ 'type' => 'string', 'locationName' => 'pingTtlList', ],
                'pingTtl' => [ 'type' => 'integer', 'locationName' => 'pingTtl', ],
                'tracerMaxHop' => [ 'type' => 'integer', 'locationName' => 'tracerMaxHop', ],
                'tracerAvgTs' => [ 'type' => 'long', 'locationName' => 'tracerAvgTs', ],
                'tracerCname' => [ 'type' => 'string', 'locationName' => 'tracerCname', ],
                'tracerIp' => [ 'type' => 'string', 'locationName' => 'tracerIp', ],
                'tracerHops' => [ 'type' => 'string', 'locationName' => 'tracerHops', ],
                'tracerHopNum' => [ 'type' => 'integer', 'locationName' => 'tracerHopNum', ],
            ],
        ],
        'Task' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskUrl' => [ 'type' => 'string', 'locationName' => 'taskUrl', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'protocolType' => [ 'type' => 'integer', 'locationName' => 'protocolType', ],
                'taskGroupId' => [ 'type' => 'long', 'locationName' => 'taskGroupId', ],
                'taskGroupName' => [ 'type' => 'string', 'locationName' => 'taskGroupName', ],
                'monitorPointCount' => [ 'type' => 'integer', 'locationName' => 'monitorPointCount', ],
                'monitorInterval' => [ 'type' => 'integer', 'locationName' => 'monitorInterval', ],
                'monitorStartDate' => [ 'type' => 'string', 'locationName' => 'monitorStartDate', ],
                'monitorEndDate' => [ 'type' => 'string', 'locationName' => 'monitorEndDate', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'createdDate' => [ 'type' => 'string', 'locationName' => 'createdDate', ],
            ],
        ],
        'TasksInfo' => [
            'type' => 'structure',
            'members' => [
                'confType' => [ 'type' => 'string', 'locationName' => 'confType', ],
                'confUID' => [ 'type' => 'string', 'locationName' => 'confUID', ],
                'content' => [ 'type' => 'object', 'locationName' => 'content', ],
                'interval' => [ 'type' => 'long', 'locationName' => 'interval', ],
                'meta' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryNetworkAvgMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
            ],
        ],
        'QueryNetworkAvgMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetMetric', ], ],
            ],
        ],
        'QuerySuccessRateMetricRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
            ],
        ],
        'QueryTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryTasksResultShape', ],
            ],
        ],
        'QueryTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Task', ], ],
            ],
        ],
        'QueryProtocolMonitorResultsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'QuerySuccessRateMetricResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'SuccessRateMetric', ], ],
            ],
        ],
        'QueryProtocolAvgMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryProtocolAvgMetricsResultShape', ],
            ],
        ],
        'QueryProtocolAvgMetricsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
            ],
        ],
        'QueryNetworkAvgMetricsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryNetworkAvgMetricsResultShape', ],
            ],
        ],
        'QueryNetworkMonitorResultsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Net', ], ],
            ],
        ],
        'QueryNetworkMonitorResultsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryNetworkMonitorResultsResultShape', ],
            ],
        ],
        'QueryProtocolAvgMetricsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtocolMetric', ], ],
            ],
        ],
        'QueryTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'taskName' => [ 'type' => 'string', 'locationName' => 'taskName', ],
                'taskUrl' => [ 'type' => 'string', 'locationName' => 'taskUrl', ],
                'taskType' => [ 'type' => 'integer', 'locationName' => 'taskType', ],
                'protocolType' => [ 'type' => 'integer', 'locationName' => 'protocolType', ],
                'taskClassify' => [ 'type' => 'integer', 'locationName' => 'taskClassify', ],
                'taskGroupId' => [ 'type' => 'long', 'locationName' => 'taskGroupId', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'QueryProtocolMonitorResultsResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'Protocol', ], ],
            ],
        ],
        'QueryNetworkMonitorResultsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'long', 'locationName' => 'taskId', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'QueryProtocolMonitorResultsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryProtocolMonitorResultsResultShape', ],
            ],
        ],
        'QuerySuccessRateMetricResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QuerySuccessRateMetricResultShape', ],
            ],
        ],
    ],
];
