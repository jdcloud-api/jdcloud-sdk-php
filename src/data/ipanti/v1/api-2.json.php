<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ipanti',
        'protocol' => 'json',
//        'serviceFullName' => 'ipanti',
//        'serviceId' => 'ipanti',
    ],
    'operations' => [
        'DescribeDDoSAttackLogs' => [
            'name' => 'DescribeDDoSAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:DDoS',
            ],
            'input' => [ 'shape' => 'DescribeDDoSAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDDoSAttackLogsResponseShape', ],
        ],
        'DescribeCCAttackLogs' => [
            'name' => 'DescribeCCAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:CC',
            ],
            'input' => [ 'shape' => 'DescribeCCAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCAttackLogsResponseShape', ],
        ],
        'DescribeCCAttackLogDetails' => [
            'name' => 'DescribeCCAttackLogDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:CCDetail',
            ],
            'input' => [ 'shape' => 'DescribeCCAttackLogDetailsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCAttackLogDetailsResponseShape', ],
        ],
        'DownloadDDoSAttackLogs' => [
            'name' => 'DownloadDDoSAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:DDoS/download',
            ],
            'input' => [ 'shape' => 'DownloadDDoSAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DownloadDDoSAttackLogsResponseShape', ],
        ],
        'DownloadCCAttackLogs' => [
            'name' => 'DownloadCCAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:CC/download',
            ],
            'input' => [ 'shape' => 'DownloadCCAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DownloadCCAttackLogsResponseShape', ],
        ],
        'DownloadCCAttackLogDetails' => [
            'name' => 'DownloadCCAttackLogDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:CCDetail/download',
            ],
            'input' => [ 'shape' => 'DownloadCCAttackLogDetailsRequestShape', ],
            'output' => [ 'shape' => 'DownloadCCAttackLogDetailsResponseShape', ],
        ],
        'DescribeAttackStatistics' => [
            'name' => 'DescribeAttackStatistics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog/describeAttackStatistics',
            ],
            'input' => [ 'shape' => 'DescribeAttackStatisticsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackStatisticsResponseShape', ],
        ],
        'DescribeAttackTypeCount' => [
            'name' => 'DescribeAttackTypeCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog/describeAttackTypeCount',
            ],
            'input' => [ 'shape' => 'DescribeAttackTypeCountRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackTypeCountResponseShape', ],
        ],
        'DescribeDDoSGraph' => [
            'name' => 'DescribeDDoSGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:DDoSGraph',
            ],
            'input' => [ 'shape' => 'DescribeDDoSGraphRequestShape', ],
            'output' => [ 'shape' => 'DescribeDDoSGraphResponseShape', ],
        ],
        'DescribeFwdGraph' => [
            'name' => 'DescribeFwdGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:fwdGraph',
            ],
            'input' => [ 'shape' => 'DescribeFwdGraphRequestShape', ],
            'output' => [ 'shape' => 'DescribeFwdGraphResponseShape', ],
        ],
        'DescribeCCGraph' => [
            'name' => 'DescribeCCGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:CCGraph',
            ],
            'input' => [ 'shape' => 'DescribeCCGraphRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCGraphResponseShape', ],
        ],
        'DescribeForwardRules' => [
            'name' => 'DescribeForwardRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules',
            ],
            'input' => [ 'shape' => 'DescribeForwardRulesRequestShape', ],
            'output' => [ 'shape' => 'DescribeForwardRulesResponseShape', ],
        ],
        'CreateForwardRule' => [
            'name' => 'CreateForwardRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules',
            ],
            'input' => [ 'shape' => 'CreateForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateForwardRuleResponseShape', ],
        ],
        'DescribeForwardRule' => [
            'name' => 'DescribeForwardRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}',
            ],
            'input' => [ 'shape' => 'DescribeForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeForwardRuleResponseShape', ],
        ],
        'ModifyForwardRule' => [
            'name' => 'ModifyForwardRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}',
            ],
            'input' => [ 'shape' => 'ModifyForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyForwardRuleResponseShape', ],
        ],
        'DeleteForwardRule' => [
            'name' => 'DeleteForwardRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteForwardRuleResponseShape', ],
        ],
        'SwitchForwardRuleProtect' => [
            'name' => 'SwitchForwardRuleProtect',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}:protect',
            ],
            'input' => [ 'shape' => 'SwitchForwardRuleProtectRequestShape', ],
            'output' => [ 'shape' => 'SwitchForwardRuleProtectResponseShape', ],
        ],
        'SwitchForwardRuleOrigin' => [
            'name' => 'SwitchForwardRuleOrigin',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}:origin',
            ],
            'input' => [ 'shape' => 'SwitchForwardRuleOriginRequestShape', ],
            'output' => [ 'shape' => 'SwitchForwardRuleOriginResponseShape', ],
        ],
        'DescribeProtectionRuleOfForwardRule' => [
            'name' => 'DescribeProtectionRuleOfForwardRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}:describeProtectionRule',
            ],
            'input' => [ 'shape' => 'DescribeProtectionRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectionRuleOfForwardRuleResponseShape', ],
        ],
        'ModifyProtectionRuleOfForwardRule' => [
            'name' => 'ModifyProtectionRuleOfForwardRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}:modifyProtectionRule',
            ],
            'input' => [ 'shape' => 'ModifyProtectionRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyProtectionRuleOfForwardRuleResponseShape', ],
        ],
        'DescribeGeoAreas' => [
            'name' => 'DescribeGeoAreas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeGeoAreas',
            ],
            'input' => [ 'shape' => 'DescribeGeoAreasRequestShape', ],
            'output' => [ 'shape' => 'DescribeGeoAreasResponseShape', ],
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
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstance' => [
            'name' => 'DescribeInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceResponseShape', ],
        ],
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rename',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
        ],
        'ModifyEPB' => [
            'name' => 'ModifyEPB',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyEPB',
            ],
            'input' => [ 'shape' => 'ModifyEPBRequestShape', ],
            'output' => [ 'shape' => 'ModifyEPBResponseShape', ],
        ],
        'ModifyInstanceCC' => [
            'name' => 'ModifyInstanceCC',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setCC',
            ],
            'input' => [ 'shape' => 'ModifyInstanceCCRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceCCResponseShape', ],
        ],
        'EnableInstanceCC' => [
            'name' => 'EnableInstanceCC',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableCC',
            ],
            'input' => [ 'shape' => 'EnableInstanceCCRequestShape', ],
            'output' => [ 'shape' => 'EnableInstanceCCResponseShape', ],
        ],
        'DisableInstanceCC' => [
            'name' => 'DisableInstanceCC',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableCC',
            ],
            'input' => [ 'shape' => 'DisableInstanceCCRequestShape', ],
            'output' => [ 'shape' => 'DisableInstanceCCResponseShape', ],
        ],
        'ModifyInstanceUrlWhiteList' => [
            'name' => 'ModifyInstanceUrlWhiteList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setUrlWhiteList',
            ],
            'input' => [ 'shape' => 'ModifyInstanceUrlWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceUrlWhiteListResponseShape', ],
        ],
        'EnableInstanceUrlWhiteList' => [
            'name' => 'EnableInstanceUrlWhiteList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableUrlWhiteList',
            ],
            'input' => [ 'shape' => 'EnableInstanceUrlWhiteListRequestShape', ],
            'output' => [ 'shape' => 'EnableInstanceUrlWhiteListResponseShape', ],
        ],
        'DisableInstanceUrlWhiteList' => [
            'name' => 'DisableInstanceUrlWhiteList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableUrlWhiteList',
            ],
            'input' => [ 'shape' => 'DisableInstanceUrlWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DisableInstanceUrlWhiteListResponseShape', ],
        ],
        'ModifyInstanceIpBlackList' => [
            'name' => 'ModifyInstanceIpBlackList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setIpBlackList',
            ],
            'input' => [ 'shape' => 'ModifyInstanceIpBlackListRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceIpBlackListResponseShape', ],
        ],
        'EnableInstanceIpBlackList' => [
            'name' => 'EnableInstanceIpBlackList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableIpBlackList',
            ],
            'input' => [ 'shape' => 'EnableInstanceIpBlackListRequestShape', ],
            'output' => [ 'shape' => 'EnableInstanceIpBlackListResponseShape', ],
        ],
        'DisableInstanceIpBlackList' => [
            'name' => 'DisableInstanceIpBlackList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableIpBlackList',
            ],
            'input' => [ 'shape' => 'DisableInstanceIpBlackListRequestShape', ],
            'output' => [ 'shape' => 'DisableInstanceIpBlackListResponseShape', ],
        ],
        'ModifyInstanceIpWhiteList' => [
            'name' => 'ModifyInstanceIpWhiteList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setIpWhiteList',
            ],
            'input' => [ 'shape' => 'ModifyInstanceIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceIpWhiteListResponseShape', ],
        ],
        'EnableInstanceIpWhiteList' => [
            'name' => 'EnableInstanceIpWhiteList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableIpWhiteList',
            ],
            'input' => [ 'shape' => 'EnableInstanceIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'EnableInstanceIpWhiteListResponseShape', ],
        ],
        'DisableInstanceIpWhiteList' => [
            'name' => 'DisableInstanceIpWhiteList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableIpWhiteList',
            ],
            'input' => [ 'shape' => 'DisableInstanceIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DisableInstanceIpWhiteListResponseShape', ],
        ],
        'EnableCCObserverMode' => [
            'name' => 'EnableCCObserverMode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableCCObserverMode',
            ],
            'input' => [ 'shape' => 'EnableCCObserverModeRequestShape', ],
            'output' => [ 'shape' => 'EnableCCObserverModeResponseShape', ],
        ],
        'DisableCCObserverMode' => [
            'name' => 'DisableCCObserverMode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableCCObserverMode',
            ],
            'input' => [ 'shape' => 'DisableCCObserverModeRequestShape', ],
            'output' => [ 'shape' => 'DisableCCObserverModeResponseShape', ],
        ],
        'EnableCCIpLimit' => [
            'name' => 'EnableCCIpLimit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableCCIpLimit',
            ],
            'input' => [ 'shape' => 'EnableCCIpLimitRequestShape', ],
            'output' => [ 'shape' => 'EnableCCIpLimitResponseShape', ],
        ],
        'DisableCCIpLimit' => [
            'name' => 'DisableCCIpLimit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableCCIpLimit',
            ],
            'input' => [ 'shape' => 'DisableCCIpLimitRequestShape', ],
            'output' => [ 'shape' => 'DisableCCIpLimitResponseShape', ],
        ],
        'SetCCIpLimit' => [
            'name' => 'SetCCIpLimit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setCCIpLimit',
            ],
            'input' => [ 'shape' => 'SetCCIpLimitRequestShape', ],
            'output' => [ 'shape' => 'SetCCIpLimitResponseShape', ],
        ],
        'DescribeAlarmConfig' => [
            'name' => 'DescribeAlarmConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeAlarmConfig',
            ],
            'input' => [ 'shape' => 'DescribeAlarmConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeAlarmConfigResponseShape', ],
        ],
        'ModifyAlarmConfig' => [
            'name' => 'ModifyAlarmConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyAlarmConfig',
            ],
            'input' => [ 'shape' => 'ModifyAlarmConfigRequestShape', ],
            'output' => [ 'shape' => 'ModifyAlarmConfigResponseShape', ],
        ],
        'DescribeNameList' => [
            'name' => 'DescribeNameList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeNameList',
            ],
            'input' => [ 'shape' => 'DescribeNameListRequestShape', ],
            'output' => [ 'shape' => 'DescribeNameListResponseShape', ],
        ],
        'DescribeProtectionStatistics' => [
            'name' => 'DescribeProtectionStatistics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeProtectionStatistics',
            ],
            'input' => [ 'shape' => 'DescribeProtectionStatisticsRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectionStatisticsResponseShape', ],
        ],
        'CheckName' => [
            'name' => 'CheckName',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/checkName',
            ],
            'input' => [ 'shape' => 'CheckNameRequestShape', ],
            'output' => [ 'shape' => 'CheckNameResponseShape', ],
        ],
        'DescribeVpcIpList' => [
            'name' => 'DescribeVpcIpList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeVpcIpList',
            ],
            'input' => [ 'shape' => 'DescribeVpcIpListRequestShape', ],
            'output' => [ 'shape' => 'DescribeVpcIpListResponseShape', ],
        ],
        'DescribeCCDefaultThresholds' => [
            'name' => 'DescribeCCDefaultThresholds',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeCCDefaultThresholds',
            ],
            'input' => [ 'shape' => 'DescribeCCDefaultThresholdsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCDefaultThresholdsResponseShape', ],
        ],
        'DescribeWebRules' => [
            'name' => 'DescribeWebRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules',
            ],
            'input' => [ 'shape' => 'DescribeWebRulesRequestShape', ],
            'output' => [ 'shape' => 'DescribeWebRulesResponseShape', ],
        ],
        'CreateWebRule' => [
            'name' => 'CreateWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules',
            ],
            'input' => [ 'shape' => 'CreateWebRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateWebRuleResponseShape', ],
        ],
        'DescribeWebRule' => [
            'name' => 'DescribeWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}',
            ],
            'input' => [ 'shape' => 'DescribeWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeWebRuleResponseShape', ],
        ],
        'ModifyWebRule' => [
            'name' => 'ModifyWebRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}',
            ],
            'input' => [ 'shape' => 'ModifyWebRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyWebRuleResponseShape', ],
        ],
        'DeleteWebRule' => [
            'name' => 'DeleteWebRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteWebRuleResponseShape', ],
        ],
        'SwitchWebRuleProtect' => [
            'name' => 'SwitchWebRuleProtect',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:protect',
            ],
            'input' => [ 'shape' => 'SwitchWebRuleProtectRequestShape', ],
            'output' => [ 'shape' => 'SwitchWebRuleProtectResponseShape', ],
        ],
        'SwitchWebRuleOrigin' => [
            'name' => 'SwitchWebRuleOrigin',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:origin',
            ],
            'input' => [ 'shape' => 'SwitchWebRuleOriginRequestShape', ],
            'output' => [ 'shape' => 'SwitchWebRuleOriginResponseShape', ],
        ],
        'EnableWebRuleCC' => [
            'name' => 'EnableWebRuleCC',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:enableCC',
            ],
            'input' => [ 'shape' => 'EnableWebRuleCCRequestShape', ],
            'output' => [ 'shape' => 'EnableWebRuleCCResponseShape', ],
        ],
        'DisableWebRuleCC' => [
            'name' => 'DisableWebRuleCC',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:disableCC',
            ],
            'input' => [ 'shape' => 'DisableWebRuleCCRequestShape', ],
            'output' => [ 'shape' => 'DisableWebRuleCCResponseShape', ],
        ],
        'ModifyCertInfo' => [
            'name' => 'ModifyCertInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:modifyCertInfo',
            ],
            'input' => [ 'shape' => 'ModifyCertInfoRequestShape', ],
            'output' => [ 'shape' => 'ModifyCertInfoResponseShape', ],
        ],
        'DescribeCertInfo' => [
            'name' => 'DescribeCertInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:describeCertInfo',
            ],
            'input' => [ 'shape' => 'DescribeCertInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeCertInfoResponseShape', ],
        ],
    ],
    'shapes' => [
        'AlarmConfig' => [
            'type' => 'structure',
            'members' => [
                'blackHoleAlarmEmailStatus' => [ 'type' => 'integer', 'locationName' => 'blackHoleAlarmEmailStatus', ],
                'blackHoleAlarmSmsStatus' => [ 'type' => 'integer', 'locationName' => 'blackHoleAlarmSmsStatus', ],
                'blackHoleAlarmStatus' => [ 'type' => 'integer', 'locationName' => 'blackHoleAlarmStatus', ],
                'ddosAlarmEmailStatus' => [ 'type' => 'integer', 'locationName' => 'ddosAlarmEmailStatus', ],
                'ddosAlarmSmsStatus' => [ 'type' => 'integer', 'locationName' => 'ddosAlarmSmsStatus', ],
                'ddosAlarmStatus' => [ 'type' => 'integer', 'locationName' => 'ddosAlarmStatus', ],
                'errorCodeAlarmStatus' => [ 'type' => 'integer', 'locationName' => 'errorCodeAlarmStatus', ],
                'errorCodeDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AlarmConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'blackHoleAlarmEmailStatus' => [ 'type' => 'integer', 'locationName' => 'blackHoleAlarmEmailStatus', ],
                'blackHoleAlarmSmsStatus' => [ 'type' => 'integer', 'locationName' => 'blackHoleAlarmSmsStatus', ],
                'blackHoleAlarmStatus' => [ 'type' => 'integer', 'locationName' => 'blackHoleAlarmStatus', ],
                'ddosAlarmEmailStatus' => [ 'type' => 'integer', 'locationName' => 'ddosAlarmEmailStatus', ],
                'ddosAlarmSmsStatus' => [ 'type' => 'integer', 'locationName' => 'ddosAlarmSmsStatus', ],
                'ddosAlarmStatus' => [ 'type' => 'integer', 'locationName' => 'ddosAlarmStatus', ],
                'errorCodeAlarmStatus' => [ 'type' => 'integer', 'locationName' => 'errorCodeAlarmStatus', ],
                'errorCodeDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AttackTypeCount' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'BwRepeatMsg' => [
            'type' => 'structure',
            'members' => [
                'black' => [ 'type' => 'string', 'locationName' => 'black', ],
                'white' => [ 'type' => 'string', 'locationName' => 'white', ],
            ],
        ],
        'CCAttackLogDetail' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
            ],
        ],
        'CCDefaultThresholds' => [
            'type' => 'structure',
            'members' => [
                'hostQps' => [ 'type' => 'integer', 'locationName' => 'hostQps', ],
                'hostUrlQps' => [ 'type' => 'integer', 'locationName' => 'hostUrlQps', ],
                'ipHostQps' => [ 'type' => 'integer', 'locationName' => 'ipHostQps', ],
                'ipHostUrlQps' => [ 'type' => 'integer', 'locationName' => 'ipHostUrlQps', ],
            ],
        ],
        'CCProtectionConfig' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'observerMode' => [ 'type' => 'integer', 'locationName' => 'observerMode', ],
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'ccThreshold' => [ 'type' => 'long', 'locationName' => 'ccThreshold', ],
                'hostQps' => [ 'type' => 'long', 'locationName' => 'hostQps', ],
                'hostUrlQps' => [ 'type' => 'long', 'locationName' => 'hostUrlQps', ],
                'ipHostQps' => [ 'type' => 'long', 'locationName' => 'ipHostQps', ],
                'ipHostUrlQps' => [ 'type' => 'long', 'locationName' => 'ipHostUrlQps', ],
                'ccProtectionRuleEnableCount' => [ 'type' => 'long', 'locationName' => 'ccProtectionRuleEnableCount', ],
            ],
        ],
        'CCProtectionConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'level' => [ 'type' => 'integer', 'locationName' => 'level', ],
                'ccThreshold' => [ 'type' => 'long', 'locationName' => 'ccThreshold', ],
                'hostQps' => [ 'type' => 'long', 'locationName' => 'hostQps', ],
                'hostUrlQps' => [ 'type' => 'long', 'locationName' => 'hostUrlQps', ],
                'ipHostQps' => [ 'type' => 'long', 'locationName' => 'ipHostQps', ],
                'ipHostUrlQps' => [ 'type' => 'long', 'locationName' => 'ipHostUrlQps', ],
            ],
        ],
        'CCProtectionDefaultConfig' => [
            'type' => 'structure',
            'members' => [
                'ccThreshold' => [ 'type' => 'long', 'locationName' => 'ccThreshold', ],
                'hostQps' => [ 'type' => 'long', 'locationName' => 'hostQps', ],
                'hostUrlQps' => [ 'type' => 'long', 'locationName' => 'hostUrlQps', ],
                'ipHostQps' => [ 'type' => 'long', 'locationName' => 'ipHostQps', ],
                'ipHostUrlQps' => [ 'type' => 'long', 'locationName' => 'ipHostUrlQps', ],
            ],
        ],
        'CCProtectionRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'matchType' => [ 'type' => 'integer', 'locationName' => 'matchType', ],
                'detectPeriod' => [ 'type' => 'long', 'locationName' => 'detectPeriod', ],
                'singleIpLimit' => [ 'type' => 'long', 'locationName' => 'singleIpLimit', ],
                'blockType' => [ 'type' => 'integer', 'locationName' => 'blockType', ],
                'blockTime' => [ 'type' => 'long', 'locationName' => 'blockTime', ],
            ],
        ],
        'CCProtectionRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'matchType' => [ 'type' => 'integer', 'locationName' => 'matchType', ],
                'detectPeriod' => [ 'type' => 'long', 'locationName' => 'detectPeriod', ],
                'singleIpLimit' => [ 'type' => 'long', 'locationName' => 'singleIpLimit', ],
                'blockType' => [ 'type' => 'integer', 'locationName' => 'blockType', ],
                'blockTime' => [ 'type' => 'long', 'locationName' => 'blockTime', ],
            ],
        ],
        'CcIpLimitSpec' => [
            'type' => 'structure',
            'members' => [
                'ccSpeedLimit' => [ 'type' => 'long', 'locationName' => 'ccSpeedLimit', ],
                'ccSpeedPeriod' => [ 'type' => 'long', 'locationName' => 'ccSpeedPeriod', ],
            ],
        ],
        'CCSpec' => [
            'type' => 'structure',
            'members' => [
                'ccProtectMode' => [ 'type' => 'integer', 'locationName' => 'ccProtectMode', ],
                'ccThreshold' => [ 'type' => 'long', 'locationName' => 'ccThreshold', ],
                'hostQps' => [ 'type' => 'long', 'locationName' => 'hostQps', ],
                'hostUrlQps' => [ 'type' => 'long', 'locationName' => 'hostUrlQps', ],
                'ipHostQps' => [ 'type' => 'long', 'locationName' => 'ipHostQps', ],
                'ipHostUrlQps' => [ 'type' => 'long', 'locationName' => 'ipHostUrlQps', ],
            ],
        ],
        'CertInfo' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'from' => [ 'type' => 'string', 'locationName' => 'from', ],
                'to' => [ 'type' => 'string', 'locationName' => 'to', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'sigAlgName' => [ 'type' => 'string', 'locationName' => 'sigAlgName', ],
                'issuer' => [ 'type' => 'string', 'locationName' => 'issuer', ],
            ],
        ],
        'CertInfoDescribeSpec' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'httpsCertContent' => [ 'type' => 'string', 'locationName' => 'httpsCertContent', ],
            ],
        ],
        'CertInfoModifySpec' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'long', 'locationName' => 'certId', ],
                'httpsCertContent' => [ 'type' => 'string', 'locationName' => 'httpsCertContent', ],
                'httpsRsaKey' => [ 'type' => 'string', 'locationName' => 'httpsRsaKey', ],
            ],
        ],
        'Certificate' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'rsaKey' => [ 'type' => 'string', 'locationName' => 'rsaKey', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'from' => [ 'type' => 'string', 'locationName' => 'from', ],
                'to' => [ 'type' => 'string', 'locationName' => 'to', ],
                'sigAlgName' => [ 'type' => 'string', 'locationName' => 'sigAlgName', ],
                'issuer' => [ 'type' => 'string', 'locationName' => 'issuer', ],
                'organization' => [ 'type' => 'string', 'locationName' => 'organization', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
                'associatedDomains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanDomains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CertificateSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'rsaKey' => [ 'type' => 'string', 'locationName' => 'rsaKey', ],
            ],
        ],
        'Country' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'CreateInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'carrier' => [ 'type' => 'integer', 'locationName' => 'carrier', ],
                'ipType' => [ 'type' => 'integer', 'locationName' => 'ipType', ],
                'bp' => [ 'type' => 'integer', 'locationName' => 'bp', ],
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
                'bw' => [ 'type' => 'integer', 'locationName' => 'bw', ],
                'timeSpan' => [ 'type' => 'long', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'DDosAttackLog' => [
            'type' => 'structure',
            'members' => [
                'attackTraffic' => [ 'type' => 'double', 'locationName' => 'attackTraffic', ],
                'blackHole' => [ 'type' => 'integer', 'locationName' => 'blackHole', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'EPBSpec' => [
            'type' => 'structure',
            'members' => [
                'ePB' => [ 'type' => 'integer', 'locationName' => 'ePB', ],
            ],
        ],
        'GeoBlack' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ForwardProtectionRule' => [
            'type' => 'structure',
            'members' => [
                'spoofIpEnable' => [ 'type' => 'integer', 'locationName' => 'spoofIpEnable', ],
                'srcNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'srcNewConnLimitEnable', ],
                'srcNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcNewConnLimitValue', ],
                'srcConcurrentConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'srcConcurrentConnLimitEnable', ],
                'srcConcurrentConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcConcurrentConnLimitValue', ],
                'dstNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'dstNewConnLimitEnable', ],
                'dstNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstNewConnLimitValue', ],
                'dstConcurrentConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'dstConcurrentConnLimitEnable', ],
                'dstConcurrentConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstConcurrentConnLimitValue', ],
                'datagramRangeMin' => [ 'type' => 'long', 'locationName' => 'datagramRangeMin', ],
                'datagramRangeMax' => [ 'type' => 'long', 'locationName' => 'datagramRangeMax', ],
                'geoBlackList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoBlack', ], ],
            ],
        ],
        'ForwardProtectionRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'spoofIpEnable' => [ 'type' => 'integer', 'locationName' => 'spoofIpEnable', ],
                'srcNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'srcNewConnLimitEnable', ],
                'srcNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcNewConnLimitValue', ],
                'srcConcurrentConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'srcConcurrentConnLimitEnable', ],
                'srcConcurrentConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcConcurrentConnLimitValue', ],
                'dstNewConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'dstNewConnLimitEnable', ],
                'dstNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstNewConnLimitValue', ],
                'dstConcurrentConnLimitEnable' => [ 'type' => 'integer', 'locationName' => 'dstConcurrentConnLimitEnable', ],
                'dstConcurrentConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstConcurrentConnLimitValue', ],
                'datagramRangeMin' => [ 'type' => 'long', 'locationName' => 'datagramRangeMin', ],
                'datagramRangeMax' => [ 'type' => 'long', 'locationName' => 'datagramRangeMax', ],
                'geoBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'OriginAddrItem' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'inJdCloud' => [ 'type' => 'boolean', 'locationName' => 'inJdCloud', ],
            ],
        ],
        'ForwardRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'originType' => [ 'type' => 'string', 'locationName' => 'originType', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'originAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriginAddrItem', ], ],
                'onlineAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'originPort' => [ 'type' => 'integer', 'locationName' => 'originPort', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'ForwardRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'originType' => [ 'type' => 'string', 'locationName' => 'originType', ],
                'originAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriginAddrItem', ], ],
                'onlineAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'originPort' => [ 'type' => 'integer', 'locationName' => 'originPort', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'carrier' => [ 'type' => 'integer', 'locationName' => 'carrier', ],
                'ipType' => [ 'type' => 'integer', 'locationName' => 'ipType', ],
                'elasticTriggerCount' => [ 'type' => 'integer', 'locationName' => 'elasticTriggerCount', ],
                'abovePeakCount' => [ 'type' => 'integer', 'locationName' => 'abovePeakCount', ],
                'inBitslimit' => [ 'type' => 'integer', 'locationName' => 'inBitslimit', ],
                'resilientBitslimit' => [ 'type' => 'integer', 'locationName' => 'resilientBitslimit', ],
                'businessBitslimit' => [ 'type' => 'integer', 'locationName' => 'businessBitslimit', ],
                'ccThreshold' => [ 'type' => 'integer', 'locationName' => 'ccThreshold', ],
                'ruleCount' => [ 'type' => 'integer', 'locationName' => 'ruleCount', ],
                'webRuleCount' => [ 'type' => 'integer', 'locationName' => 'webRuleCount', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'securityStatus' => [ 'type' => 'string', 'locationName' => 'securityStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'ccProtectMode' => [ 'type' => 'integer', 'locationName' => 'ccProtectMode', ],
                'ccProtectStatus' => [ 'type' => 'integer', 'locationName' => 'ccProtectStatus', ],
                'ccSpeedLimit' => [ 'type' => 'integer', 'locationName' => 'ccSpeedLimit', ],
                'ccSpeedPeriod' => [ 'type' => 'integer', 'locationName' => 'ccSpeedPeriod', ],
                'ipBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipBlackStatus' => [ 'type' => 'integer', 'locationName' => 'ipBlackStatus', ],
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipWhiteStatus' => [ 'type' => 'integer', 'locationName' => 'ipWhiteStatus', ],
                'urlWhitelist' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'urlWhitelistStatus' => [ 'type' => 'integer', 'locationName' => 'urlWhitelistStatus', ],
                'hostQps' => [ 'type' => 'integer', 'locationName' => 'hostQps', ],
                'hostUrlQps' => [ 'type' => 'integer', 'locationName' => 'hostUrlQps', ],
                'ipHostQps' => [ 'type' => 'integer', 'locationName' => 'ipHostQps', ],
                'ipHostUrlQps' => [ 'type' => 'integer', 'locationName' => 'ipHostUrlQps', ],
            ],
        ],
        'InstanceIdName' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'IpBwListSpec' => [
            'type' => 'structure',
            'members' => [
                'ipList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tryFlag' => [ 'type' => 'boolean', 'locationName' => 'tryFlag', ],
            ],
        ],
        'ModifyInstanceEPBSpec' => [
            'type' => 'structure',
            'members' => [
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
            ],
        ],
        'PriceSpec' => [
            'type' => 'structure',
            'members' => [
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'billingType' => [ 'type' => 'integer', 'locationName' => 'billingType', ],
                'carrier' => [ 'type' => 'integer', 'locationName' => 'carrier', ],
                'bw' => [ 'type' => 'integer', 'locationName' => 'bw', ],
                'bp' => [ 'type' => 'integer', 'locationName' => 'bp', ],
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
            ],
        ],
        'ProtectionOutline' => [
            'type' => 'structure',
            'members' => [
                'instancesCount' => [ 'type' => 'integer', 'locationName' => 'instancesCount', ],
                'protectedCount' => [ 'type' => 'integer', 'locationName' => 'protectedCount', ],
                'protectedDay' => [ 'type' => 'integer', 'locationName' => 'protectedDay', ],
                'weekAttackCount' => [ 'type' => 'integer', 'locationName' => 'weekAttackCount', ],
                'weekAttackPeak' => [ 'type' => 'double', 'locationName' => 'weekAttackPeak', ],
                'weekAttackUnit' => [ 'type' => 'string', 'locationName' => 'weekAttackUnit', ],
                'monthAttackCount' => [ 'type' => 'integer', 'locationName' => 'monthAttackCount', ],
                'monthAttackPeak' => [ 'type' => 'double', 'locationName' => 'monthAttackPeak', ],
                'monthAttackUnit' => [ 'type' => 'string', 'locationName' => 'monthAttackUnit', ],
            ],
        ],
        'ProtectionStatistics' => [
            'type' => 'structure',
            'members' => [
                'instancesCount' => [ 'type' => 'integer', 'locationName' => 'instancesCount', ],
                'protectedCount' => [ 'type' => 'integer', 'locationName' => 'protectedCount', ],
                'protectedDay' => [ 'type' => 'integer', 'locationName' => 'protectedDay', ],
            ],
        ],
        'WebRuleProtocol' => [
            'type' => 'structure',
            'members' => [
                'http' => [ 'type' => 'boolean', 'locationName' => 'http', ],
                'https' => [ 'type' => 'boolean', 'locationName' => 'https', ],
            ],
        ],
        'RenameInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'Status' => [
            'type' => 'structure',
            'members' => [
                'retcode' => [ 'type' => 'integer', 'locationName' => 'retcode', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'msg' => [ 'type' => 'string', 'locationName' => 'msg', ],
            ],
        ],
        'VpcIpResource' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'binded' => [ 'type' => 'boolean', 'locationName' => 'binded', ],
            ],
        ],
        'WebRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'protocol' =>  [ 'shape' => 'WebRuleProtocol', ],
                'customPortStatus' => [ 'type' => 'integer', 'locationName' => 'customPortStatus', ],
                'port' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'httpsPort' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'httpOrigin' => [ 'type' => 'integer', 'locationName' => 'httpOrigin', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'originType' => [ 'type' => 'string', 'locationName' => 'originType', ],
                'originAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriginAddrItem', ], ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'onlineAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'httpCertStatus' => [ 'type' => 'integer', 'locationName' => 'httpCertStatus', ],
                'certId' => [ 'type' => 'long', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'httpsCertContent' => [ 'type' => 'string', 'locationName' => 'httpsCertContent', ],
                'httpsRsaKey' => [ 'type' => 'string', 'locationName' => 'httpsRsaKey', ],
                'forceJump' => [ 'type' => 'integer', 'locationName' => 'forceJump', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'ccStatus' => [ 'type' => 'integer', 'locationName' => 'ccStatus', ],
                'webSocketStatus' => [ 'type' => 'integer', 'locationName' => 'webSocketStatus', ],
            ],
        ],
        'WebRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'protocol' =>  [ 'shape' => 'WebRuleProtocol', ],
                'port' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'httpsPort' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'originType' => [ 'type' => 'string', 'locationName' => 'originType', ],
                'originAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriginAddrItem', ], ],
                'onlineAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'forceJump' => [ 'type' => 'integer', 'locationName' => 'forceJump', ],
                'customPortStatus' => [ 'type' => 'integer', 'locationName' => 'customPortStatus', ],
                'httpOrigin' => [ 'type' => 'integer', 'locationName' => 'httpOrigin', ],
                'webSocketStatus' => [ 'type' => 'integer', 'locationName' => 'webSocketStatus', ],
                'httpsCertContent' => [ 'type' => 'string', 'locationName' => 'httpsCertContent', ],
                'httpsRsaKey' => [ 'type' => 'string', 'locationName' => 'httpsRsaKey', ],
                'certId' => [ 'type' => 'long', 'locationName' => 'certId', ],
            ],
        ],
        'DownloadCCAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DownloadDDoSAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DownloadCCAttackLogDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAttackStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeAttackStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'type' => [ 'type' => 'integer', 'locationName' => 'type', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCCAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDDoSAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAttackTypeCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DownloadCCAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DownloadCCAttackLogDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'subDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DownloadCCAttackLogDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DownloadCCAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAttackStatisticsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackStatisticsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackStatisticsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDDoSAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DDosAttackLog', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeCCAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCAttackLogsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCAttackLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackTypeCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAttackTypeCountResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAttackTypeCountResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAttackTypeCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackTypeCount', ], ],
            ],
        ],
        'DescribeDDoSAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDDoSAttackLogsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeDDoSAttackLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DownloadDDoSAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCCAttackLogDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'subDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DownloadDDoSAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCCAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DDosAttackLog', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeCCAttackLogDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CCAttackLogDetail', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeCCAttackLogDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCAttackLogDetailsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCAttackLogDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDDoSGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDDoSGraphResultShape', ],
                'error' =>  [ 'shape' => 'DescribeDDoSGraphResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCCGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeDDoSGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeFwdGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeFwdGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'forwardRecord' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeDDoSGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCCGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCGraphResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCGraphResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCCGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'subDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeFwdGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeFwdGraphResultShape', ],
                'error' =>  [ 'shape' => 'DescribeFwdGraphResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'long', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'SwitchForwardRuleProtectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'long', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'ModifyForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'forwardRuleSpec' =>  [ 'shape' => 'ForwardRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'long', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'SwitchForwardRuleOriginRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'long', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DescribeForwardRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchValue' => [ 'type' => 'string', 'locationName' => 'searchValue', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'SwitchForwardRuleOriginResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SwitchForwardRuleOriginResultShape', ],
                'error' =>  [ 'shape' => 'SwitchForwardRuleOriginResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'long', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DescribeForwardRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeForwardRulesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeForwardRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'DeleteForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchForwardRuleOriginResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeProtectionRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'protectionRule' =>  [ 'shape' => 'ForwardProtectionRule', ],
            ],
        ],
        'ModifyProtectionRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeGeoAreasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeGeoAreasResultShape', ],
                'error' =>  [ 'shape' => 'DescribeGeoAreasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeForwardRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ForwardRule', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'CreateForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'long', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'ModifyForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'SwitchForwardRuleProtectResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeProtectionRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectionRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectionRuleOfForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyProtectionRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyProtectionRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyProtectionRuleOfForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'ModifyProtectionRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'forwardProtectionRuleSpec' =>  [ 'shape' => 'ForwardProtectionRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'long', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DeleteForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CreateForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'forwardRuleSpec' =>  [ 'shape' => 'ForwardRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeGeoAreasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ForwardRule', ],
            ],
        ],
        'SwitchForwardRuleProtectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SwitchForwardRuleProtectResultShape', ],
                'error' =>  [ 'shape' => 'SwitchForwardRuleProtectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ProtectionStatistics', ],
            ],
        ],
        'DescribeCCDefaultThresholdsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCDefaultThresholdsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCDefaultThresholdsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCCIpLimitRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInstanceUrlWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableInstanceIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableInstanceIpWhiteListResultShape', ],
                'error' =>  [ 'shape' => 'EnableInstanceIpWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInstanceIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeVpcIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CheckNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyInstanceIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyEPBResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyEPBResultShape', ],
                'error' =>  [ 'shape' => 'ModifyEPBResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeVpcIpListResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcIpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'error' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'renameInstanceSpec' =>  [ 'shape' => 'RenameInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceCCResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceCCResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableCCObserverModeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyInstanceIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipBwListSpec' =>  [ 'shape' => 'IpBwListSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyAlarmConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyAlarmConfigResultShape', ],
                'error' =>  [ 'shape' => 'ModifyAlarmConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cCSpec' =>  [ 'shape' => 'CCSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInstanceIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableInstanceIpWhiteListResultShape', ],
                'error' =>  [ 'shape' => 'DisableInstanceIpWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetCCIpLimitResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SetCCIpLimitResultShape', ],
                'error' =>  [ 'shape' => 'SetCCIpLimitResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetCCIpLimitResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeProtectionStatisticsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectionStatisticsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectionStatisticsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceIpWhiteListResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceIpWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipBwListSpec' =>  [ 'shape' => 'IpBwListSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'CheckNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckNameResultShape', ],
                'error' =>  [ 'shape' => 'CheckNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceUrlWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyAlarmConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeNameListResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceIdName', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'ModifyInstanceUrlWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'urlWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeNameListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EnableCCIpLimitRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAlarmConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'AlarmConfig', ],
            ],
        ],
        'EnableCCIpLimitResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeNameListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeNameListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeNameListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceNameResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyEPBRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyInstanceEPBSpec' =>  [ 'shape' => 'ModifyInstanceEPBSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeCCDefaultThresholdsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeProtectionStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'EnableInstanceIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInstanceCCResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableInstanceIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableInstanceIpBlackListResultShape', ],
                'error' =>  [ 'shape' => 'EnableInstanceIpBlackListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DisableInstanceCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableInstanceCCResultShape', ],
                'error' =>  [ 'shape' => 'DisableInstanceCCResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableCCIpLimitResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableCCIpLimitResultShape', ],
                'error' =>  [ 'shape' => 'EnableCCIpLimitResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyEPBResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableInstanceUrlWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableInstanceUrlWhiteListResultShape', ],
                'error' =>  [ 'shape' => 'DisableInstanceUrlWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'EnableInstanceCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableInstanceCCResultShape', ],
                'error' =>  [ 'shape' => 'EnableInstanceCCResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableCCObserverModeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableCCObserverModeResultShape', ],
                'error' =>  [ 'shape' => 'EnableCCObserverModeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceUrlWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceUrlWhiteListResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceUrlWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInstanceUrlWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInstanceIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInstanceCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInstanceIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyInstanceCCResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeCCDefaultThresholdsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CCDefaultThresholds', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeVpcIpListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeVpcIpListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeVpcIpListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyInstanceIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceIpBlackListResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceIpBlackListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInstanceUrlWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableInstanceIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createInstanceSpec' =>  [ 'shape' => 'CreateInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInstanceUrlWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableInstanceUrlWhiteListResultShape', ],
                'error' =>  [ 'shape' => 'EnableInstanceUrlWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCCIpLimitResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeAlarmConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAlarmConfigResultShape', ],
                'error' =>  [ 'shape' => 'DescribeAlarmConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCCObserverModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'SetCCIpLimitRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cCSpec' =>  [ 'shape' => 'CcIpLimitSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableCCObserverModeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableInstanceIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableInstanceIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableInstanceIpBlackListResultShape', ],
                'error' =>  [ 'shape' => 'DisableInstanceIpBlackListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCCIpLimitResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableCCIpLimitResultShape', ],
                'error' =>  [ 'shape' => 'DisableCCIpLimitResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceUrlWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableInstanceIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableInstanceCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'CheckNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAlarmConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'alarmConfigSpec' =>  [ 'shape' => 'AlarmConfigSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInstanceCCResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableCCObserverModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableCCObserverModeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableCCObserverModeResultShape', ],
                'error' =>  [ 'shape' => 'DisableCCObserverModeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInstanceIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWebRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchWebRuleProtectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SwitchWebRuleProtectResultShape', ],
                'error' =>  [ 'shape' => 'SwitchWebRuleProtectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWebRuleCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableWebRuleCCResultShape', ],
                'error' =>  [ 'shape' => 'EnableWebRuleCCResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableWebRuleCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableWebRuleCCResultShape', ],
                'error' =>  [ 'shape' => 'DisableWebRuleCCResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCertInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CertInfo', ],
            ],
        ],
        'DescribeCertInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCertInfoResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCertInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWebRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebRule', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableWebRuleCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'SwitchWebRuleOriginResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SwitchWebRuleOriginResultShape', ],
                'error' =>  [ 'shape' => 'SwitchWebRuleOriginResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'SwitchWebRuleOriginRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DeleteWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DeleteWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webRuleSpec' =>  [ 'shape' => 'WebRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebRule', ],
            ],
        ],
        'DeleteWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'SwitchWebRuleOriginResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'SwitchWebRuleProtectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeCertInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certInfoDescribeSpec' =>  [ 'shape' => 'CertInfoDescribeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyCertInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certInfoModifySpec' =>  [ 'shape' => 'CertInfoModifySpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeWebRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'searchType' => [ 'type' => 'string', 'locationName' => 'searchType', ],
                'searchValue' => [ 'type' => 'string', 'locationName' => 'searchValue', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableWebRuleCCResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyCertInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableWebRuleCCResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWebRuleCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webRuleSpec' =>  [ 'shape' => 'WebRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'long', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyCertInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCertInfoResultShape', ],
                'error' =>  [ 'shape' => 'ModifyCertInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchWebRuleProtectResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
    ],
];
