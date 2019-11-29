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
        'AgentStatus' => [
            'type' => 'structure',
            'members' => [
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'value' => [ 'type' => 'long', 'locationName' => 'value', ],
            ],
        ],
        'BaseContact' => [
            'type' => 'structure',
            'members' => [
                'referenceId' => [ 'type' => 'long', 'locationName' => 'referenceId', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
            ],
        ],
        'NoticeLevel' => [
            'type' => 'structure',
            'members' => [
                'custom' => [ 'type' => 'boolean', 'locationName' => 'custom', ],
                'levels' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'double', ], ],
            ],
        ],
        'BasicRule' => [
            'type' => 'structure',
            'members' => [
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'BasicRuleDetail' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'calculation' => [ 'type' => 'string', 'locationName' => 'calculation', ],
                'downSample' => [ 'type' => 'string', 'locationName' => 'downSample', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'noticeLevel' =>  [ 'shape' => 'NoticeLevel', ],
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
                'period' => [ 'type' => 'long', 'locationName' => 'period', ],
                'threshold' => [ 'type' => 'double', 'locationName' => 'threshold', ],
                'times' => [ 'type' => 'long', 'locationName' => 'times', ],
            ],
        ],
        'TemplateOption' => [
            'type' => 'structure',
            'members' => [
                'templateId' => [ 'type' => 'string', 'locationName' => 'templateId', ],
                'templateType' => [ 'type' => 'long', 'locationName' => 'templateType', ],
            ],
        ],
        'WebHookOption' => [
            'type' => 'structure',
            'members' => [
                'webHookContent' => [ 'type' => 'string', 'locationName' => 'webHookContent', ],
                'webHookProtocol' => [ 'type' => 'string', 'locationName' => 'webHookProtocol', ],
                'webHookSecret' => [ 'type' => 'string', 'locationName' => 'webHookSecret', ],
                'webHookUrl' => [ 'type' => 'string', 'locationName' => 'webHookUrl', ],
            ],
        ],
        'NoticeOption' => [
            'type' => 'structure',
            'members' => [
                'effectiveIntervalEnd' => [ 'type' => 'string', 'locationName' => 'effectiveIntervalEnd', ],
                'effectiveIntervalStart' => [ 'type' => 'string', 'locationName' => 'effectiveIntervalStart', ],
                'noticeCondition' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'noticePeriod' => [ 'type' => 'long', 'locationName' => 'noticePeriod', ],
                'noticeWay' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'ResourceOption' => [
            'type' => 'structure',
            'members' => [
                'resourceItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceItem', ], ],
                'tagsOption' =>  [ 'shape' => 'TagsOption', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'TagsOption' => [
            'type' => 'structure',
            'members' => [
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'CreateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'ResourceItem' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'RuleOption' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicRule', ], ],
                'templateOption' =>  [ 'shape' => 'TemplateOption', ],
            ],
        ],
        'CreateProbeTaskParam' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'httpBody' => [ 'type' => 'string', 'locationName' => 'httpBody', ],
                'httpCookie' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpType' => [ 'type' => 'long', 'locationName' => 'httpType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'long', 'locationName' => 'port', ],
                'probeType' => [ 'type' => 'long', 'locationName' => 'probeType', ],
                'probes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Probe', ], ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetRegion' => [ 'type' => 'string', 'locationName' => 'targetRegion', ],
                'taskType' => [ 'type' => 'long', 'locationName' => 'taskType', ],
            ],
        ],
        'Probe' => [
            'type' => 'structure',
            'members' => [
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'KeyValue' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CreateProbeTaskSpec' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createProbeTaskSpec' =>  [ 'shape' => 'CreateProbeTaskParam', ],
            ],
        ],
        'CreateSiteMonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'dnsOption' =>  [ 'shape' => 'SiteMonitorDnsOption', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'ftpOption' =>  [ 'shape' => 'SiteMonitorFtpOption', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pingOption' =>  [ 'shape' => 'SiteMonitorPingOption', ],
                'pop3Option' =>  [ 'shape' => 'SiteMonitorPop3Option', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'smtpOption' =>  [ 'shape' => 'SiteMonitorSmtpOption', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'SiteMonitorPingOption' => [
            'type' => 'structure',
            'members' => [
                'packetCount' => [ 'type' => 'long', 'locationName' => 'packetCount', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'SiteMonitorSmtpOption' => [
            'type' => 'structure',
            'members' => [
                'passwd' => [ 'type' => 'string', 'locationName' => 'passwd', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
            ],
        ],
        'SiteMonitorUdpOption' => [
            'type' => 'structure',
            'members' => [
                'reqContent' => [ 'type' => 'string', 'locationName' => 'reqContent', ],
                'reqContentType' => [ 'type' => 'string', 'locationName' => 'reqContentType', ],
                'resCheck' => [ 'type' => 'string', 'locationName' => 'resCheck', ],
                'resCheckType' => [ 'type' => 'string', 'locationName' => 'resCheckType', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'SiteMonitorFtpOption' => [
            'type' => 'structure',
            'members' => [
                'loginType' => [ 'type' => 'string', 'locationName' => 'loginType', ],
                'passwd' => [ 'type' => 'string', 'locationName' => 'passwd', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
            ],
        ],
        'SiteMonitorDnsOption' => [
            'type' => 'structure',
            'members' => [
                'checkType' => [ 'type' => 'string', 'locationName' => 'checkType', ],
                'expectAlias' => [ 'type' => 'string', 'locationName' => 'expectAlias', ],
                'expectIP' => [ 'type' => 'string', 'locationName' => 'expectIP', ],
                'server' => [ 'type' => 'string', 'locationName' => 'server', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'SiteMonitorSource' => [
            'type' => 'structure',
            'members' => [
                'sisp' => [ 'type' => 'string', 'locationName' => 'sisp', ],
                'sispName' => [ 'type' => 'string', 'locationName' => 'sispName', ],
                'sloc' => [ 'type' => 'string', 'locationName' => 'sloc', ],
                'slocName' => [ 'type' => 'string', 'locationName' => 'slocName', ],
            ],
        ],
        'SiteMonitorTcpOption' => [
            'type' => 'structure',
            'members' => [
                'reqContent' => [ 'type' => 'string', 'locationName' => 'reqContent', ],
                'reqContentType' => [ 'type' => 'string', 'locationName' => 'reqContentType', ],
                'resCheck' => [ 'type' => 'string', 'locationName' => 'resCheck', ],
                'resCheckType' => [ 'type' => 'string', 'locationName' => 'resCheckType', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
            ],
        ],
        'SiteMonitorHttpOption' => [
            'type' => 'structure',
            'members' => [
                'cookie' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'header' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'reqContent' => [ 'type' => 'string', 'locationName' => 'reqContent', ],
                'resCheck' => [ 'type' => 'string', 'locationName' => 'resCheck', ],
                'resCheckType' => [ 'type' => 'string', 'locationName' => 'resCheckType', ],
            ],
        ],
        'SiteMonitorPop3Option' => [
            'type' => 'structure',
            'members' => [
                'passwd' => [ 'type' => 'string', 'locationName' => 'passwd', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
            ],
        ],
        'DataPoint' => [
            'type' => 'structure',
            'members' => [
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
                'value' => [ 'type' => 'object', 'locationName' => 'value', ],
            ],
        ],
        'RuleOptionDetail' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'BasicRuleDetail', ], ],
                'templateOption' =>  [ 'shape' => 'TemplateOption', ],
            ],
        ],
        'DescribeGroupAlarm' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'alarmStatus' => [ 'type' => 'long', 'locationName' => 'alarmStatus', ],
                'alarmStatusList' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOptionDetail', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'ruleVersion' => [ 'type' => 'string', 'locationName' => 'ruleVersion', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'DescribedAlarmHistory' => [
            'type' => 'structure',
            'members' => [
                'alarmId' => [ 'type' => 'string', 'locationName' => 'alarmId', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dimensionName' => [ 'type' => 'string', 'locationName' => 'dimensionName', ],
                'durationTimes' => [ 'type' => 'long', 'locationName' => 'durationTimes', ],
                'noticeDurationTime' => [ 'type' => 'long', 'locationName' => 'noticeDurationTime', ],
                'noticeLevel' => [ 'type' => 'string', 'locationName' => 'noticeLevel', ],
                'noticeLevelTriggered' => [ 'type' => 'string', 'locationName' => 'noticeLevelTriggered', ],
                'noticeTime' => [ 'type' => 'string', 'locationName' => 'noticeTime', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'productName' => [ 'type' => 'string', 'locationName' => 'productName', ],
                'receivers' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeReceiver', ], ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'rule' =>  [ 'shape' => 'BasicRuleDetail', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'NoticeReceiver' => [
            'type' => 'structure',
            'members' => [
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'mobile' => [ 'type' => 'string', 'locationName' => 'mobile', ],
                'personId' => [ 'type' => 'long', 'locationName' => 'personId', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'DescribedNoticeContacts' => [
            'type' => 'structure',
            'members' => [
                'referenceId' => [ 'type' => 'long', 'locationName' => 'referenceId', ],
                'referenceType' => [ 'type' => 'long', 'locationName' => 'referenceType', ],
            ],
        ],
        'EnableSiteMonitorReqItem' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'EnableSiteMonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnableSiteMonitorReqItem', ], ],
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
        'Event' => [
            'type' => 'structure',
            'members' => [
                'probeResult' => [ 'type' => 'long', 'locationName' => 'probeResult', ],
                'probeStatus' => [ 'type' => 'long', 'locationName' => 'probeStatus', ],
                'timestamp' => [ 'type' => 'long', 'locationName' => 'timestamp', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Location' => [
            'type' => 'structure',
            'members' => [
                'sloc' => [ 'type' => 'string', 'locationName' => 'sloc', ],
                'slocName' => [ 'type' => 'string', 'locationName' => 'slocName', ],
                'isIpv6' => [ 'type' => 'boolean', 'locationName' => 'isIpv6', ],
            ],
        ],
        'IspLocation' => [
            'type' => 'structure',
            'members' => [
                'sisp' => [ 'type' => 'string', 'locationName' => 'sisp', ],
                'sispName' => [ 'type' => 'string', 'locationName' => 'sispName', ],
                'slocs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Location', ], ],
            ],
        ],
        'Metric' => [
            'type' => 'structure',
            'members' => [
                'aggregator' => [ 'type' => 'string', 'locationName' => 'aggregator', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'tagKey' => [ 'type' => 'string', 'locationName' => 'tagKey', ],
                'tagValue' => [ 'type' => 'string', 'locationName' => 'tagValue', ],
            ],
        ],
        'MetricData' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metric' =>  [ 'shape' => 'Metric', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'ProbeInfo' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'privateIp' => [ 'type' => 'string', 'locationName' => 'privateIp', ],
                'probeResult' => [ 'type' => 'long', 'locationName' => 'probeResult', ],
                'probeStatus' => [ 'type' => 'long', 'locationName' => 'probeStatus', ],
                'publicIp' => [ 'type' => 'string', 'locationName' => 'publicIp', ],
                'targetStatus' => [ 'type' => 'long', 'locationName' => 'targetStatus', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
                'vmStatus' => [ 'type' => 'string', 'locationName' => 'vmStatus', ],
            ],
        ],
        'ProbeTaskEnableSpec' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'taskId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Resource' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
            ],
        ],
        'RuleCounting' => [
            'type' => 'structure',
            'members' => [
                'alarmRuleCount' => [ 'type' => 'long', 'locationName' => 'alarmRuleCount', ],
                'disableRuleCount' => [ 'type' => 'long', 'locationName' => 'disableRuleCount', ],
                'normalRuleCount' => [ 'type' => 'long', 'locationName' => 'normalRuleCount', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'totalRuleCount' => [ 'type' => 'long', 'locationName' => 'totalRuleCount', ],
                'unknownRuleCount' => [ 'type' => 'long', 'locationName' => 'unknownRuleCount', ],
            ],
        ],
        'RuleMetricDetail' => [
            'type' => 'structure',
            'members' => [
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'RuleState' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'ruleCount' => [ 'type' => 'long', 'locationName' => 'ruleCount', ],
                'state' => [ 'type' => 'long', 'locationName' => 'state', ],
            ],
        ],
        'SiteMonitor' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'dnsOption' =>  [ 'shape' => 'SiteMonitorDnsOption', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'ftpOption' =>  [ 'shape' => 'SiteMonitorFtpOption', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pingOption' =>  [ 'shape' => 'SiteMonitorPingOption', ],
                'pop3Option' =>  [ 'shape' => 'SiteMonitorPop3Option', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'smtpOption' =>  [ 'shape' => 'SiteMonitorSmtpOption', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'StatsItem' => [
            'type' => 'structure',
            'members' => [
                'aggregateFunc' => [ 'type' => 'string', 'locationName' => 'aggregateFunc', ],
                'aggregateIntervalMin' => [ 'type' => 'uint64', 'locationName' => 'aggregateIntervalMin', ],
                'calculateUnit' => [ 'type' => 'string', 'locationName' => 'calculateUnit', ],
                'dps' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ],
                'metric' => [ 'type' => 'string', 'locationName' => 'metric', ],
                'metricName' => [ 'type' => 'string', 'locationName' => 'metricName', ],
                'resource' =>  [ 'shape' => 'Resource', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'TaskInfo' => [
            'type' => 'structure',
            'members' => [
                'abnormalCount' => [ 'type' => 'long', 'locationName' => 'abnormalCount', ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'deleted' => [ 'type' => 'boolean', 'locationName' => 'deleted', ],
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'probeAvailability' => [ 'type' => 'double', 'locationName' => 'probeAvailability', ],
                'probeCount' => [ 'type' => 'long', 'locationName' => 'probeCount', ],
                'probeType' => [ 'type' => 'long', 'locationName' => 'probeType', ],
                'responseTime' => [ 'type' => 'double', 'locationName' => 'responseTime', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'TasksInfo' => [
            'type' => 'structure',
            'members' => [
                'confType' => [ 'type' => 'string', 'locationName' => 'confType', ],
                'confUID' => [ 'type' => 'string', 'locationName' => 'confUID', ],
                'content' => [ 'type' => 'object', 'locationName' => 'content', ],
                'interval' => [ 'type' => 'long', 'locationName' => 'interval', ],
                'meta' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
            ],
        ],
        'TestSiteMonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'dnsOption' =>  [ 'shape' => 'SiteMonitorDnsOption', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'ftpOption' =>  [ 'shape' => 'SiteMonitorFtpOption', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pingOption' =>  [ 'shape' => 'SiteMonitorPingOption', ],
                'pop3Option' =>  [ 'shape' => 'SiteMonitorPop3Option', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'smtpOption' =>  [ 'shape' => 'SiteMonitorSmtpOption', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'UpdateAlarmResourcesSpec' => [
            'type' => 'structure',
            'members' => [
                'operatorType' => [ 'type' => 'long', 'locationName' => 'operatorType', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
            ],
        ],
        'UpdateAlarmSpec' => [
            'type' => 'structure',
            'members' => [
                'autoScalingPolicyId' => [ 'type' => 'string', 'locationName' => 'autoScalingPolicyId', ],
                'baseContact' => [ 'type' => 'list', 'member' => [ 'shape' => 'BaseContact', ], ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'noticeOption' => [ 'type' => 'list', 'member' => [ 'shape' => 'NoticeOption', ], ],
                'product' => [ 'type' => 'string', 'locationName' => 'product', ],
                'resourceOption' =>  [ 'shape' => 'ResourceOption', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleOption' =>  [ 'shape' => 'RuleOption', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'webHookOption' =>  [ 'shape' => 'WebHookOption', ],
            ],
        ],
        'UpdateProbeTaskSpec' => [
            'type' => 'structure',
            'members' => [
                'httpBody' => [ 'type' => 'string', 'locationName' => 'httpBody', ],
                'httpCookie' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpType' => [ 'type' => 'long', 'locationName' => 'httpType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'probes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Probe', ], ],
            ],
        ],
        'UpdateSiteMonitorSpec' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'dnsOption' =>  [ 'shape' => 'SiteMonitorDnsOption', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'ftpOption' =>  [ 'shape' => 'SiteMonitorFtpOption', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pingOption' =>  [ 'shape' => 'SiteMonitorPingOption', ],
                'pop3Option' =>  [ 'shape' => 'SiteMonitorPop3Option', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'smtpOption' =>  [ 'shape' => 'SiteMonitorSmtpOption', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'UpdateWebHookOut' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'UpdateWebHookSpec' => [
            'type' => 'structure',
            'members' => [
                'active' => [ 'type' => 'long', 'locationName' => 'active', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'DescribeProbeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProbeTaskResultShape', ],
            ],
        ],
        'ProbeTaskEnableRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'boolean', 'locationName' => 'enabled', ],
                'taskId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteProbeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteProbeTaskResultShape', ],
            ],
        ],
        'UpdateProbeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'DescribeAgentStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeAgentStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeAgentStatusResultShape', ],
            ],
        ],
        'DeleteProbeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'probeTaskIDs' => [ 'type' => 'string', 'locationName' => 'probeTaskIDs', ],
            ],
        ],
        'CreateProbeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateProbeTaskResultShape', ],
            ],
        ],
        'DescribeMetricDataAmResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeMetricDataAmResultShape', ],
            ],
        ],
        'DiscribeProbesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
            ],
        ],
        'CreateProbeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'createProbeTaskSpec' =>  [ 'shape' => 'CreateProbeTaskParam', ],
            ],
        ],
        'UpdateProbeTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateProbeTaskResultShape', ],
            ],
        ],
        'DescribeProbeHistoryRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
                'probeID' => [ 'type' => 'string', 'locationName' => 'probeID', ],
            ],
        ],
        'DiscribeProbesResultShape' => [
            'type' => 'structure',
            'members' => [
                'probeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProbeInfo', ], ],
            ],
        ],
        'DescribeMetricDataAmRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
            ],
        ],
        'DescribeMetricDataAmResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricData', ], ],
            ],
        ],
        'DiscribeProbesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DiscribeProbesResultShape', ],
            ],
        ],
        'DescribeProbeTasksResultShape' => [
            'type' => 'structure',
            'members' => [
                'numberPages' => [ 'type' => 'long', 'locationName' => 'numberPages', ],
                'numberRecords' => [ 'type' => 'long', 'locationName' => 'numberRecords', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'taskInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskInfo', ], ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeProbeTasksRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'long', 'locationName' => 'type', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'withStats' => [ 'type' => 'boolean', 'locationName' => 'withStats', ],
                'withDeleted' => [ 'type' => 'boolean', 'locationName' => 'withDeleted', ],
                'enabled' => [ 'type' => 'long', 'locationName' => 'enabled', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DescribeProbeHistoryResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProbeHistoryResultShape', ],
            ],
        ],
        'DescribeProbeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
            ],
        ],
        'ProbeTaskEnableResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'CreateProbeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'DescribeProbeTasksResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DescribeProbeTasksResultShape', ],
            ],
        ],
        'DescribeProbeHistoryResultShape' => [
            'type' => 'structure',
            'members' => [
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'Event', ], ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uuid' => [ 'type' => 'string', 'locationName' => 'uuid', ],
            ],
        ],
        'UpdateProbeTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'httpBody' => [ 'type' => 'string', 'locationName' => 'httpBody', ],
                'httpCookie' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpType' => [ 'type' => 'long', 'locationName' => 'httpType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'probes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Probe', ], ],
                'probeTaskID' => [ 'type' => 'string', 'locationName' => 'probeTaskID', ],
            ],
        ],
        'ProbeTaskEnableResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ProbeTaskEnableResultShape', ],
            ],
        ],
        'DeleteProbeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'DescribeAgentStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'items' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgentStatus', ], ],
            ],
        ],
        'DescribeProbeTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'probes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Probe', ], ],
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'deleted' => [ 'type' => 'boolean', 'locationName' => 'deleted', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'frequency' => [ 'type' => 'long', 'locationName' => 'frequency', ],
                'httpBody' => [ 'type' => 'string', 'locationName' => 'httpBody', ],
                'httpCookie' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValue', ], ],
                'httpType' => [ 'type' => 'long', 'locationName' => 'httpType', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'port' => [ 'type' => 'long', 'locationName' => 'port', ],
                'probeType' => [ 'type' => 'long', 'locationName' => 'probeType', ],
                'targetId' => [ 'type' => 'string', 'locationName' => 'targetId', ],
                'targetRegion' => [ 'type' => 'string', 'locationName' => 'targetRegion', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskType' => [ 'type' => 'long', 'locationName' => 'taskType', ],
                'timeout' => [ 'type' => 'long', 'locationName' => 'timeout', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'GetSiteMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSiteMonitorResultShape', ],
            ],
        ],
        'TestSiteMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'error' => [ 'type' => 'string', 'locationName' => 'error', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
                'status' => [ 'type' => 'long', 'locationName' => 'status', ],
            ],
        ],
        'UpdateSiteMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'ValidateSiteMonitorAddressResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'GetSiteMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'nameOrAddr' => [ 'type' => 'string', 'locationName' => 'nameOrAddr', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'pageNumber' => [ 'type' => 'long', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'long', 'locationName' => 'pageSize', ],
                'withStats' => [ 'type' => 'string', 'locationName' => 'withStats', ],
                'withDeleted' => [ 'type' => 'string', 'locationName' => 'withDeleted', ],
                'timeInterval' => [ 'type' => 'string', 'locationName' => 'timeInterval', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'DeleteSiteMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'GetSiteMonitorDataPointsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'CreateSiteMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'dnsOption' =>  [ 'shape' => 'SiteMonitorDnsOption', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'ftpOption' =>  [ 'shape' => 'SiteMonitorFtpOption', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pingOption' =>  [ 'shape' => 'SiteMonitorPingOption', ],
                'pop3Option' =>  [ 'shape' => 'SiteMonitorPop3Option', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'smtpOption' =>  [ 'shape' => 'SiteMonitorSmtpOption', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'DeleteSiteMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
            ],
        ],
        'EnableSiteMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'suc' => [ 'type' => 'boolean', 'locationName' => 'suc', ],
            ],
        ],
        'ValidateSiteMonitorAddressRequestShape' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
            ],
        ],
        'GetSiteMonitorSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSiteMonitorSourceResultShape', ],
            ],
        ],
        'CreateSiteMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateSiteMonitorResultShape', ],
            ],
        ],
        'EnableSiteMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnableSiteMonitorReqItem', ], ],
            ],
        ],
        'GetSiteMonitorSourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'all' => [ 'type' => 'list', 'member' => [ 'shape' => 'IspLocation', ], ],
                'limited' => [ 'type' => 'list', 'member' => [ 'shape' => 'IspLocation', ], ],
            ],
        ],
        'UpdateSiteMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateSiteMonitorResultShape', ],
            ],
        ],
        'TestSiteMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'dnsOption' =>  [ 'shape' => 'SiteMonitorDnsOption', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'ftpOption' =>  [ 'shape' => 'SiteMonitorFtpOption', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pingOption' =>  [ 'shape' => 'SiteMonitorPingOption', ],
                'pop3Option' =>  [ 'shape' => 'SiteMonitorPop3Option', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'smtpOption' =>  [ 'shape' => 'SiteMonitorSmtpOption', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'DeleteSiteMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteSiteMonitorResultShape', ],
            ],
        ],
        'CreateSiteMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'GetSiteMonitorDataPointsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetSiteMonitorDataPointsResultShape', ],
            ],
        ],
        'UpdateSiteMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'address' => [ 'type' => 'string', 'locationName' => 'address', ],
                'advanceChecked' => [ 'type' => 'string', 'locationName' => 'advanceChecked', ],
                'createdTime' => [ 'type' => 'long', 'locationName' => 'createdTime', ],
                'cycle' => [ 'type' => 'long', 'locationName' => 'cycle', ],
                'defaultSource' => [ 'type' => 'string', 'locationName' => 'defaultSource', ],
                'dnsOption' =>  [ 'shape' => 'SiteMonitorDnsOption', ],
                'enabled' => [ 'type' => 'string', 'locationName' => 'enabled', ],
                'ftpOption' =>  [ 'shape' => 'SiteMonitorFtpOption', ],
                'hawkeyeId' => [ 'type' => 'long', 'locationName' => 'hawkeyeId', ],
                'httpOption' =>  [ 'shape' => 'SiteMonitorHttpOption', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'isDeleted' => [ 'type' => 'string', 'locationName' => 'isDeleted', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'pingOption' =>  [ 'shape' => 'SiteMonitorPingOption', ],
                'pop3Option' =>  [ 'shape' => 'SiteMonitorPop3Option', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'smtpOption' =>  [ 'shape' => 'SiteMonitorSmtpOption', ],
                'source' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitorSource', ], ],
                'stats' => [ 'type' => 'map', 'key' => [ 'shape' => 'string', ], 'value' => [ 'shape' => 'string', ], ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'tcpOption' =>  [ 'shape' => 'SiteMonitorTcpOption', ],
                'udpOption' =>  [ 'shape' => 'SiteMonitorUdpOption', ],
                'updatedTime' => [ 'type' => 'long', 'locationName' => 'updatedTime', ],
            ],
        ],
        'GetSiteMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'SiteMonitor', ], ],
                'total' => [ 'type' => 'long', 'locationName' => 'total', ],
            ],
        ],
        'GetSiteMonitorDataPointsResultShape' => [
            'type' => 'structure',
            'members' => [
                'metricData' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatsItem', ], ],
                'resTime' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatsItem', ], ],
                'successRatio' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatsItem', ], ],
            ],
        ],
        'GetSiteMonitorSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'TestSiteMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'TestSiteMonitorResultShape', ],
            ],
        ],
        'ValidateSiteMonitorAddressResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ValidateSiteMonitorAddressResultShape', ],
            ],
        ],
        'EnableSiteMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'EnableSiteMonitorResultShape', ],
            ],
        ],
    ],
];
