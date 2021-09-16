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
        'DescribeAgentStatus' => [
            'name' => 'DescribeAgentStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/amAgentStatus',
            ],
            'input' => [ 'shape' => 'DescribeAgentStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribeAgentStatusResponseShape', ],
        ],
        'DescribeMetricDataAm' => [
            'name' => 'DescribeMetricDataAm',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/amMetricData',
            ],
            'input' => [ 'shape' => 'DescribeMetricDataAmRequestShape', ],
            'output' => [ 'shape' => 'DescribeMetricDataAmResponseShape', ],
        ],
        'CreateProbeTask' => [
            'name' => 'CreateProbeTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/probeTask',
            ],
            'input' => [ 'shape' => 'CreateProbeTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateProbeTaskResponseShape', ],
        ],
        'DeleteProbeTask' => [
            'name' => 'DeleteProbeTask',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/probeTask',
            ],
            'input' => [ 'shape' => 'DeleteProbeTaskRequestShape', ],
            'output' => [ 'shape' => 'DeleteProbeTaskResponseShape', ],
        ],
        'DescribeProbeTask' => [
            'name' => 'DescribeProbeTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/probeTask/{probeTaskID}',
            ],
            'input' => [ 'shape' => 'DescribeProbeTaskRequestShape', ],
            'output' => [ 'shape' => 'DescribeProbeTaskResponseShape', ],
        ],
        'UpdateProbeTask' => [
            'name' => 'UpdateProbeTask',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v2/probeTask/{probeTaskID}',
            ],
            'input' => [ 'shape' => 'UpdateProbeTaskRequestShape', ],
            'output' => [ 'shape' => 'UpdateProbeTaskResponseShape', ],
        ],
        'DescribeProbeHistory' => [
            'name' => 'DescribeProbeHistory',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/probeTask/{probeTaskID}/probe/{probeID}',
            ],
            'input' => [ 'shape' => 'DescribeProbeHistoryRequestShape', ],
            'output' => [ 'shape' => 'DescribeProbeHistoryResponseShape', ],
        ],
        'DiscribeProbes' => [
            'name' => 'DiscribeProbes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/probeTask/{probeTaskID}/probeList',
            ],
            'input' => [ 'shape' => 'DiscribeProbesRequestShape', ],
            'output' => [ 'shape' => 'DiscribeProbesResponseShape', ],
        ],
        'ProbeTaskEnable' => [
            'name' => 'ProbeTaskEnable',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/probeTask:switch',
            ],
            'input' => [ 'shape' => 'ProbeTaskEnableRequestShape', ],
            'output' => [ 'shape' => 'ProbeTaskEnableResponseShape', ],
        ],
        'DescribeProbeTasks' => [
            'name' => 'DescribeProbeTasks',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/probeTaskList',
            ],
            'input' => [ 'shape' => 'DescribeProbeTasksRequestShape', ],
            'output' => [ 'shape' => 'DescribeProbeTasksResponseShape', ],
        ],
        'GetSiteMonitor' => [
            'name' => 'GetSiteMonitor',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/siteMonitor',
            ],
            'input' => [ 'shape' => 'GetSiteMonitorRequestShape', ],
            'output' => [ 'shape' => 'GetSiteMonitorResponseShape', ],
        ],
        'CreateSiteMonitor' => [
            'name' => 'CreateSiteMonitor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/siteMonitor',
            ],
            'input' => [ 'shape' => 'CreateSiteMonitorRequestShape', ],
            'output' => [ 'shape' => 'CreateSiteMonitorResponseShape', ],
        ],
        'UpdateSiteMonitor' => [
            'name' => 'UpdateSiteMonitor',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/siteMonitor',
            ],
            'input' => [ 'shape' => 'UpdateSiteMonitorRequestShape', ],
            'output' => [ 'shape' => 'UpdateSiteMonitorResponseShape', ],
        ],
        'DeleteSiteMonitor' => [
            'name' => 'DeleteSiteMonitor',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v2/siteMonitor',
            ],
            'input' => [ 'shape' => 'DeleteSiteMonitorRequestShape', ],
            'output' => [ 'shape' => 'DeleteSiteMonitorResponseShape', ],
        ],
        'EnableSiteMonitor' => [
            'name' => 'EnableSiteMonitor',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v2/siteMonitor:switch',
            ],
            'input' => [ 'shape' => 'EnableSiteMonitorRequestShape', ],
            'output' => [ 'shape' => 'EnableSiteMonitorResponseShape', ],
        ],
        'ValidateSiteMonitorAddress' => [
            'name' => 'ValidateSiteMonitorAddress',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/siteMonitorAddress:validate',
            ],
            'input' => [ 'shape' => 'ValidateSiteMonitorAddressRequestShape', ],
            'output' => [ 'shape' => 'ValidateSiteMonitorAddressResponseShape', ],
        ],
        'GetSiteMonitorDataPoints' => [
            'name' => 'GetSiteMonitorDataPoints',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/siteMonitorDataPoints',
            ],
            'input' => [ 'shape' => 'GetSiteMonitorDataPointsRequestShape', ],
            'output' => [ 'shape' => 'GetSiteMonitorDataPointsResponseShape', ],
        ],
        'GetSiteMonitorSource' => [
            'name' => 'GetSiteMonitorSource',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v2/siteMonitorSource',
            ],
            'input' => [ 'shape' => 'GetSiteMonitorSourceRequestShape', ],
            'output' => [ 'shape' => 'GetSiteMonitorSourceResponseShape', ],
        ],
        'TestSiteMonitor' => [
            'name' => 'TestSiteMonitor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v2/testSiteMonitor',
            ],
            'input' => [ 'shape' => 'TestSiteMonitorRequestShape', ],
            'output' => [ 'shape' => 'TestSiteMonitorResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
