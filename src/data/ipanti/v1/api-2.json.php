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
                'requestUri' => '/v1/regions/{regionId}/attacklog:describeDDoSAttackLogs',
            ],
            'input' => [ 'shape' => 'DescribeDDoSAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDDoSAttackLogsResponseShape', ],
        ],
        'DescribeCCAttackLogs' => [
            'name' => 'DescribeCCAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:describeCCAttackLogs',
            ],
            'input' => [ 'shape' => 'DescribeCCAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCAttackLogsResponseShape', ],
        ],
        'DescribeCCAttackLogDetails' => [
            'name' => 'DescribeCCAttackLogDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:describeCCAttackLogDetails',
            ],
            'input' => [ 'shape' => 'DescribeCCAttackLogDetailsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCAttackLogDetailsResponseShape', ],
        ],
        'DescribeAttackStatistics' => [
            'name' => 'DescribeAttackStatistics',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:describeAttackStatistics',
            ],
            'input' => [ 'shape' => 'DescribeAttackStatisticsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAttackStatisticsResponseShape', ],
        ],
        'DescribeAttackTypeCount' => [
            'name' => 'DescribeAttackTypeCount',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:describeAttackTypeCount',
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
        'DescribeBlackListRuleOfForwardRule' => [
            'name' => 'DescribeBlackListRuleOfForwardRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}/forwardBlackListRule',
            ],
            'input' => [ 'shape' => 'DescribeBlackListRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeBlackListRuleOfForwardRuleResponseShape', ],
        ],
        'ModifyBlackListRuleOfForwardRule' => [
            'name' => 'ModifyBlackListRuleOfForwardRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}/forwardBlackListRule',
            ],
            'input' => [ 'shape' => 'ModifyBlackListRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyBlackListRuleOfForwardRuleResponseShape', ],
        ],
        'EnableBlackListRuleOfForwardRule' => [
            'name' => 'EnableBlackListRuleOfForwardRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}:enableBlackListRuleOfForwardRule',
            ],
            'input' => [ 'shape' => 'EnableBlackListRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'EnableBlackListRuleOfForwardRuleResponseShape', ],
        ],
        'DisableBlackListRuleOfForwardRule' => [
            'name' => 'DisableBlackListRuleOfForwardRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}:disableBlackListRuleOfForwardRule',
            ],
            'input' => [ 'shape' => 'DisableBlackListRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'DisableBlackListRuleOfForwardRuleResponseShape', ],
        ],
        'DescribeWhiteListRuleOfForwardRule' => [
            'name' => 'DescribeWhiteListRuleOfForwardRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}/forwardWhiteListRule',
            ],
            'input' => [ 'shape' => 'DescribeWhiteListRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeWhiteListRuleOfForwardRuleResponseShape', ],
        ],
        'ModifyWhiteListRuleOfForwardRule' => [
            'name' => 'ModifyWhiteListRuleOfForwardRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}/forwardWhiteListRule',
            ],
            'input' => [ 'shape' => 'ModifyWhiteListRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyWhiteListRuleOfForwardRuleResponseShape', ],
        ],
        'EnableWhiteListRuleOfForwardRule' => [
            'name' => 'EnableWhiteListRuleOfForwardRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}:enableWhiteListRuleOfForwardRule',
            ],
            'input' => [ 'shape' => 'EnableWhiteListRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'EnableWhiteListRuleOfForwardRuleResponseShape', ],
        ],
        'DisableWhiteListRuleOfForwardRule' => [
            'name' => 'DisableWhiteListRuleOfForwardRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/forwardRules/{forwardRuleId}:disableWhiteListRuleOfForwardRule',
            ],
            'input' => [ 'shape' => 'DisableWhiteListRuleOfForwardRuleRequestShape', ],
            'output' => [ 'shape' => 'DisableWhiteListRuleOfForwardRuleResponseShape', ],
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
        'DescribeCpsIpList' => [
            'name' => 'DescribeCpsIpList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cpsIpResources',
            ],
            'input' => [ 'shape' => 'DescribeCpsIpListRequestShape', ],
            'output' => [ 'shape' => 'DescribeCpsIpListResponseShape', ],
        ],
        'DescribeIpSets' => [
            'name' => 'DescribeIpSets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets',
            ],
            'input' => [ 'shape' => 'DescribeIpSetsRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpSetsResponseShape', ],
        ],
        'CreateIpSet' => [
            'name' => 'CreateIpSet',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets',
            ],
            'input' => [ 'shape' => 'CreateIpSetRequestShape', ],
            'output' => [ 'shape' => 'CreateIpSetResponseShape', ],
        ],
        'DescribeIpSet' => [
            'name' => 'DescribeIpSet',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets/{ipSetId}',
            ],
            'input' => [ 'shape' => 'DescribeIpSetRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpSetResponseShape', ],
        ],
        'DeleteIpSet' => [
            'name' => 'DeleteIpSet',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/ipSets/{ipSetId}',
            ],
            'input' => [ 'shape' => 'DeleteIpSetRequestShape', ],
            'output' => [ 'shape' => 'DeleteIpSetResponseShape', ],
        ],
        'DescribeIpSetUsage' => [
            'name' => 'DescribeIpSetUsage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeIpSetUsage',
            ],
            'input' => [ 'shape' => 'DescribeIpSetUsageRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpSetUsageResponseShape', ],
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
        'EnableWebRuleCCObserverMode' => [
            'name' => 'EnableWebRuleCCObserverMode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:enableCCObserverMode',
            ],
            'input' => [ 'shape' => 'EnableWebRuleCCObserverModeRequestShape', ],
            'output' => [ 'shape' => 'EnableWebRuleCCObserverModeResponseShape', ],
        ],
        'DisableWebRuleCCObserverMode' => [
            'name' => 'DisableWebRuleCCObserverMode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:disableCCObserverMode',
            ],
            'input' => [ 'shape' => 'DisableWebRuleCCObserverModeRequestShape', ],
            'output' => [ 'shape' => 'DisableWebRuleCCObserverModeResponseShape', ],
        ],
        'DescribeCCProtectionRulesOfWebRule' => [
            'name' => 'DescribeCCProtectionRulesOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/ccProtectionRules',
            ],
            'input' => [ 'shape' => 'DescribeCCProtectionRulesOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCProtectionRulesOfWebRuleResponseShape', ],
        ],
        'CreateCCProtectionRuleOfWebRule' => [
            'name' => 'CreateCCProtectionRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/ccProtectionRules',
            ],
            'input' => [ 'shape' => 'CreateCCProtectionRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateCCProtectionRuleOfWebRuleResponseShape', ],
        ],
        'DescribeCCProtectionRuleOfWebRule' => [
            'name' => 'DescribeCCProtectionRuleOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/ccProtectionRules/{ccProtectionRuleId}',
            ],
            'input' => [ 'shape' => 'DescribeCCProtectionRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCProtectionRuleOfWebRuleResponseShape', ],
        ],
        'ModifyCCProtectionRuleOfWebRule' => [
            'name' => 'ModifyCCProtectionRuleOfWebRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/ccProtectionRules/{ccProtectionRuleId}',
            ],
            'input' => [ 'shape' => 'ModifyCCProtectionRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyCCProtectionRuleOfWebRuleResponseShape', ],
        ],
        'DeleteCCProtectionRuleOfWebRule' => [
            'name' => 'DeleteCCProtectionRuleOfWebRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/ccProtectionRules/{ccProtectionRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteCCProtectionRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteCCProtectionRuleOfWebRuleResponseShape', ],
        ],
        'EnableCCProtectionRuleOfWebRule' => [
            'name' => 'EnableCCProtectionRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/ccProtectionRules/{ccProtectionRuleId}:enable',
            ],
            'input' => [ 'shape' => 'EnableCCProtectionRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'EnableCCProtectionRuleOfWebRuleResponseShape', ],
        ],
        'DisableCCProtectionRuleOfWebRule' => [
            'name' => 'DisableCCProtectionRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/ccProtectionRules/{ccProtectionRuleId}:disable',
            ],
            'input' => [ 'shape' => 'DisableCCProtectionRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DisableCCProtectionRuleOfWebRuleResponseShape', ],
        ],
        'DescribeCCProtectionConfigOfWebRule' => [
            'name' => 'DescribeCCProtectionConfigOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:ccProtectionConfig',
            ],
            'input' => [ 'shape' => 'DescribeCCProtectionConfigOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCProtectionConfigOfWebRuleResponseShape', ],
        ],
        'ModifyCCProtectionConfigOfWebRule' => [
            'name' => 'ModifyCCProtectionConfigOfWebRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:ccProtectionConfig',
            ],
            'input' => [ 'shape' => 'ModifyCCProtectionConfigOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyCCProtectionConfigOfWebRuleResponseShape', ],
        ],
        'DescribeCCProtectionDefaultConfigOfWebRule' => [
            'name' => 'DescribeCCProtectionDefaultConfigOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:ccProtectionDefaultConfig',
            ],
            'input' => [ 'shape' => 'DescribeCCProtectionDefaultConfigOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeCCProtectionDefaultConfigOfWebRuleResponseShape', ],
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
        'DescribeWebRuleBlackListUsage' => [
            'name' => 'DescribeWebRuleBlackListUsage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:describeWebRuleBlackListUsage',
            ],
            'input' => [ 'shape' => 'DescribeWebRuleBlackListUsageRequestShape', ],
            'output' => [ 'shape' => 'DescribeWebRuleBlackListUsageResponseShape', ],
        ],
        'DescribeBlackListRulesOfWebRule' => [
            'name' => 'DescribeBlackListRulesOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webBlackListRules',
            ],
            'input' => [ 'shape' => 'DescribeBlackListRulesOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeBlackListRulesOfWebRuleResponseShape', ],
        ],
        'CreateBlackListRuleOfWebRule' => [
            'name' => 'CreateBlackListRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webBlackListRules',
            ],
            'input' => [ 'shape' => 'CreateBlackListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateBlackListRuleOfWebRuleResponseShape', ],
        ],
        'DescribeBlackListRuleOfWebRule' => [
            'name' => 'DescribeBlackListRuleOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webBlackListRules/{webBlackListRuleId}',
            ],
            'input' => [ 'shape' => 'DescribeBlackListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeBlackListRuleOfWebRuleResponseShape', ],
        ],
        'ModifyBlackListRuleOfWebRule' => [
            'name' => 'ModifyBlackListRuleOfWebRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webBlackListRules/{webBlackListRuleId}',
            ],
            'input' => [ 'shape' => 'ModifyBlackListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyBlackListRuleOfWebRuleResponseShape', ],
        ],
        'DeleteBlackListRuleOfWebRule' => [
            'name' => 'DeleteBlackListRuleOfWebRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webBlackListRules/{webBlackListRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteBlackListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteBlackListRuleOfWebRuleResponseShape', ],
        ],
        'EnableWebRuleBlackList' => [
            'name' => 'EnableWebRuleBlackList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:enableWebRuleBlackList',
            ],
            'input' => [ 'shape' => 'EnableWebRuleBlackListRequestShape', ],
            'output' => [ 'shape' => 'EnableWebRuleBlackListResponseShape', ],
        ],
        'EnableBlackListRuleOfWebRule' => [
            'name' => 'EnableBlackListRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webBlackListRules/{webBlackListRuleId}:enable',
            ],
            'input' => [ 'shape' => 'EnableBlackListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'EnableBlackListRuleOfWebRuleResponseShape', ],
        ],
        'DisableWebRuleBlackList' => [
            'name' => 'DisableWebRuleBlackList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:disableWebRuleBlackList',
            ],
            'input' => [ 'shape' => 'DisableWebRuleBlackListRequestShape', ],
            'output' => [ 'shape' => 'DisableWebRuleBlackListResponseShape', ],
        ],
        'DisableBlackListRuleOfWebRule' => [
            'name' => 'DisableBlackListRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webBlackListRules/{webBlackListRuleId}:disable',
            ],
            'input' => [ 'shape' => 'DisableBlackListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DisableBlackListRuleOfWebRuleResponseShape', ],
        ],
        'DescribeWebRuleWhiteListUsage' => [
            'name' => 'DescribeWebRuleWhiteListUsage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:describeWebRuleWhiteListUsage',
            ],
            'input' => [ 'shape' => 'DescribeWebRuleWhiteListUsageRequestShape', ],
            'output' => [ 'shape' => 'DescribeWebRuleWhiteListUsageResponseShape', ],
        ],
        'DescribeWhiteListRulesOfWebRule' => [
            'name' => 'DescribeWhiteListRulesOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webWhiteListRules',
            ],
            'input' => [ 'shape' => 'DescribeWhiteListRulesOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeWhiteListRulesOfWebRuleResponseShape', ],
        ],
        'CreateWhiteListRuleOfWebRule' => [
            'name' => 'CreateWhiteListRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webWhiteListRules',
            ],
            'input' => [ 'shape' => 'CreateWhiteListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateWhiteListRuleOfWebRuleResponseShape', ],
        ],
        'DescribeWhiteListRuleOfWebRule' => [
            'name' => 'DescribeWhiteListRuleOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webWhiteListRules/{webWhiteListRuleId}',
            ],
            'input' => [ 'shape' => 'DescribeWhiteListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeWhiteListRuleOfWebRuleResponseShape', ],
        ],
        'ModifyWhiteListRuleOfWebRule' => [
            'name' => 'ModifyWhiteListRuleOfWebRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webWhiteListRules/{webWhiteListRuleId}',
            ],
            'input' => [ 'shape' => 'ModifyWhiteListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyWhiteListRuleOfWebRuleResponseShape', ],
        ],
        'DeleteWhiteListRuleOfWebRule' => [
            'name' => 'DeleteWhiteListRuleOfWebRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webWhiteListRules/{webWhiteListRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteWhiteListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteWhiteListRuleOfWebRuleResponseShape', ],
        ],
        'EnableWebRuleWhiteList' => [
            'name' => 'EnableWebRuleWhiteList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:enableWebRuleWhiteList',
            ],
            'input' => [ 'shape' => 'EnableWebRuleWhiteListRequestShape', ],
            'output' => [ 'shape' => 'EnableWebRuleWhiteListResponseShape', ],
        ],
        'EnableWhiteListRuleOfWebRule' => [
            'name' => 'EnableWhiteListRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webWhiteListRules/{webWhiteListRuleId}:enable',
            ],
            'input' => [ 'shape' => 'EnableWhiteListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'EnableWhiteListRuleOfWebRuleResponseShape', ],
        ],
        'DisableWebRuleWhiteList' => [
            'name' => 'DisableWebRuleWhiteList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:disableWebRuleWhiteList',
            ],
            'input' => [ 'shape' => 'DisableWebRuleWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DisableWebRuleWhiteListResponseShape', ],
        ],
        'DisableWhiteListRuleOfWebRule' => [
            'name' => 'DisableWhiteListRuleOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/webWhiteListRules/{webWhiteListRuleId}:disable',
            ],
            'input' => [ 'shape' => 'DisableWhiteListRuleOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DisableWhiteListRuleOfWebRuleResponseShape', ],
        ],
        'DescribeWebRuleBlackListGeoAreas' => [
            'name' => 'DescribeWebRuleBlackListGeoAreas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeWebRuleBlackListGeoAreas',
            ],
            'input' => [ 'shape' => 'DescribeWebRuleBlackListGeoAreasRequestShape', ],
            'output' => [ 'shape' => 'DescribeWebRuleBlackListGeoAreasResponseShape', ],
        ],
        'DescribeWebRuleWhiteListGeoAreas' => [
            'name' => 'DescribeWebRuleWhiteListGeoAreas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeWebRuleWhiteListGeoAreas',
            ],
            'input' => [ 'shape' => 'DescribeWebRuleWhiteListGeoAreasRequestShape', ],
            'output' => [ 'shape' => 'DescribeWebRuleWhiteListGeoAreasResponseShape', ],
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
        'CCAttackLog' => [
            'type' => 'structure',
            'members' => [
                'attackId' => [ 'type' => 'string', 'locationName' => 'attackId', ],
                'attackTraffic' => [ 'type' => 'double', 'locationName' => 'attackTraffic', ],
                'blackHole' => [ 'type' => 'integer', 'locationName' => 'blackHole', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'httpsCertContent' => [ 'type' => 'string', 'locationName' => 'httpsCertContent', ],
                'httpsRsaKey' => [ 'type' => 'string', 'locationName' => 'httpsRsaKey', ],
            ],
        ],
        'Certificate' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
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
        'CpsIpResource' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
            ],
        ],
        'CreateInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
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
        'DDoSAttackLog' => [
            'type' => 'structure',
            'members' => [
                'attackTraffic' => [ 'type' => 'double', 'locationName' => 'attackTraffic', ],
                'blackHole' => [ 'type' => 'integer', 'locationName' => 'blackHole', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'EPBSpec' => [
            'type' => 'structure',
            'members' => [
                'ePB' => [ 'type' => 'integer', 'locationName' => 'ePB', ],
            ],
        ],
        'ForwardBlackListRule' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
                'ipSetName' => [ 'type' => 'string', 'locationName' => 'ipSetName', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Geo' => [
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
                'geoBlackList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Geo', ], ],
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
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'ForwardWhiteListRule' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
                'ipSetName' => [ 'type' => 'string', 'locationName' => 'ipSetName', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'carrier' => [ 'type' => 'integer', 'locationName' => 'carrier', ],
                'ipType' => [ 'type' => 'integer', 'locationName' => 'ipType', ],
                'elasticTriggerCount' => [ 'type' => 'integer', 'locationName' => 'elasticTriggerCount', ],
                'abovePeakCount' => [ 'type' => 'integer', 'locationName' => 'abovePeakCount', ],
                'inBitslimit' => [ 'type' => 'integer', 'locationName' => 'inBitslimit', ],
                'resilientBitslimit' => [ 'type' => 'integer', 'locationName' => 'resilientBitslimit', ],
                'businessBitslimit' => [ 'type' => 'integer', 'locationName' => 'businessBitslimit', ],
                'ccThreshold' => [ 'type' => 'integer', 'locationName' => 'ccThreshold', ],
                'ccPeakQPS' => [ 'type' => 'integer', 'locationName' => 'ccPeakQPS', ],
                'ruleCount' => [ 'type' => 'integer', 'locationName' => 'ruleCount', ],
                'webRuleCount' => [ 'type' => 'integer', 'locationName' => 'webRuleCount', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'securityStatus' => [ 'type' => 'string', 'locationName' => 'securityStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'expireTime' => [ 'type' => 'string', 'locationName' => 'expireTime', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'ccObserveMode' => [ 'type' => 'integer', 'locationName' => 'ccObserveMode', ],
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
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
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
        'IpSet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'IpSetSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyBlackListRuleOfForwardRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
            ],
        ],
        'ModifyInstanceEPBSpec' => [
            'type' => 'structure',
            'members' => [
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
            ],
        ],
        'ModifyWhiteListRuleOfForwardRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
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
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
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
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
            ],
        ],
        'WebBlackListRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mode' => [ 'type' => 'integer', 'locationName' => 'mode', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'pattern' => [ 'type' => 'integer', 'locationName' => 'pattern', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'actionValue' => [ 'type' => 'string', 'locationName' => 'actionValue', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'geoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Geo', ], ],
            ],
        ],
        'WebBlackListRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mode' => [ 'type' => 'integer', 'locationName' => 'mode', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'pattern' => [ 'type' => 'integer', 'locationName' => 'pattern', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'actionValue' => [ 'type' => 'string', 'locationName' => 'actionValue', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'WebRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'cnameStatus' => [ 'type' => 'integer', 'locationName' => 'cnameStatus', ],
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
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'httpsCertContent' => [ 'type' => 'string', 'locationName' => 'httpsCertContent', ],
                'httpsRsaKey' => [ 'type' => 'string', 'locationName' => 'httpsRsaKey', ],
                'forceJump' => [ 'type' => 'integer', 'locationName' => 'forceJump', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'ccStatus' => [ 'type' => 'integer', 'locationName' => 'ccStatus', ],
                'webSocketStatus' => [ 'type' => 'integer', 'locationName' => 'webSocketStatus', ],
                'blackListEnable' => [ 'type' => 'integer', 'locationName' => 'blackListEnable', ],
                'whiteListEnable' => [ 'type' => 'integer', 'locationName' => 'whiteListEnable', ],
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
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'WebWhiteListRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mode' => [ 'type' => 'integer', 'locationName' => 'mode', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'pattern' => [ 'type' => 'integer', 'locationName' => 'pattern', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'geoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Geo', ], ],
            ],
        ],
        'WebWhiteListRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mode' => [ 'type' => 'integer', 'locationName' => 'mode', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'pattern' => [ 'type' => 'integer', 'locationName' => 'pattern', ],
                'action' => [ 'type' => 'integer', 'locationName' => 'action', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
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
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DDoSAttackLog', ], ],
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
        'DescribeAttackStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
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
        'DescribeAttackStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAttackTypeCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackTypeCount', ], ],
            ],
        ],
        'DescribeDDoSAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeAttackTypeCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCCAttackLogDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'subDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'attackId' => [ 'type' => 'string', 'locationName' => 'attackId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCCAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CCAttackLog', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
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
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeDDoSGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeFwdGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeFwdGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'forwardRecord' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeDDoSGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'SwitchForwardRuleProtectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DisableBlackListRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'ModifyForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'forwardRuleSpec' =>  [ 'shape' => 'ForwardRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'SwitchForwardRuleOriginRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
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
        'ModifyBlackListRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'SwitchForwardRuleOriginResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyBlackListRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyBlackListRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyBlackListRuleOfForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyWhiteListRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyWhiteListRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyWhiteListRuleOfForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'EnableBlackListRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableWhiteListRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeBlackListRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
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
        'ModifyWhiteListRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DescribeWhiteListRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ForwardWhiteListRule', ],
            ],
        ],
        'ModifyProtectionRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'forwardProtectionRuleSpec' =>  [ 'shape' => 'ForwardProtectionRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DisableBlackListRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableBlackListRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'DisableBlackListRuleOfForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWhiteListRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
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
        'DisableBlackListRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyWhiteListRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifySpec' =>  [ 'shape' => 'ModifyWhiteListRuleOfForwardRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DescribeForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'EnableBlackListRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DescribeBlackListRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBlackListRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeBlackListRuleOfForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableWhiteListRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'EnableWhiteListRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableWhiteListRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'EnableWhiteListRuleOfForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
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
        'EnableBlackListRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableBlackListRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'EnableBlackListRuleOfForwardRuleResultShape', ],
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
        'DescribeProtectionRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'protectionRule' =>  [ 'shape' => 'ForwardProtectionRule', ],
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
        'ModifyBlackListRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifySpec' =>  [ 'shape' => 'ModifyBlackListRuleOfForwardRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DescribeProtectionRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DescribeGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'DescribeBlackListRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ForwardBlackListRule', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeGeoAreasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeWhiteListRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWhiteListRuleOfForwardRuleResultShape', ],
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
        'DescribeWhiteListRuleOfForwardRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'forwardRuleId' => [ 'type' => 'string', 'locationName' => 'forwardRuleId', ],
            ],
        ],
        'DisableWhiteListRuleOfForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableWhiteListRuleOfForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableWhiteListRuleOfForwardRuleResultShape', ],
                'error' =>  [ 'shape' => 'DisableWhiteListRuleOfForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeProtectionStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ProtectionStatistics', ],
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
        'DescribeProtectionStatisticsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectionStatisticsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectionStatisticsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CheckNameResultShape' => [
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
        'ModifyEPBResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Instance', ],
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
        'DescribeCpsIpListResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CpsIpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
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
        'DescribeNameListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'renameInstanceSpec' =>  [ 'shape' => 'RenameInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CheckNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeCpsIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAlarmConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'AlarmConfig', ],
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
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createInstanceSpec' =>  [ 'shape' => 'CreateInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeAlarmConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeCpsIpListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCpsIpListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCpsIpListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateIpSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateIpSetResultShape', ],
                'error' =>  [ 'shape' => 'CreateIpSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpSetUsageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpSetUsageResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpSetUsageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpSetResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteIpSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'BatchResultDetail', ],
            ],
        ],
        'DeleteIpSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
            ],
        ],
        'BatchResultDetail' => [
            'type' => 'structure',
            'members' => [
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
                'failed' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorItem', ], ],
            ],
        ],
        'DescribeIpSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'ipSetId' => [ 'type' => 'string', 'locationName' => 'ipSetId', ],
            ],
        ],
        'DescribeIpSetsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSet', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeIpSetUsageResultShape' => [
            'type' => 'structure',
            'members' => [
                'allocatedNum' => [ 'type' => 'integer', 'locationName' => 'allocatedNum', ],
                'surplusAllocateNum' => [ 'type' => 'integer', 'locationName' => 'surplusAllocateNum', ],
                'maxAllocateNum' => [ 'type' => 'integer', 'locationName' => 'maxAllocateNum', ],
            ],
        ],
        'CreateIpSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeIpSetsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ErrorItem' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'code' => [ 'type' => 'long', 'locationName' => 'code', ],
                'details' => [ 'type' => 'object', 'locationName' => 'details', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'CreateIpSetRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipSetSpec' =>  [ 'shape' => 'IpSetSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeIpSetsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpSetsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeIpSetsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpSetUsageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteIpSetResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteIpSetResultShape', ],
                'error' =>  [ 'shape' => 'DeleteIpSetResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpSetResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'IpSet', ],
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
        'DescribeCCProtectionConfigOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCProtectionConfigOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCProtectionConfigOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWebRuleBlackListGeoAreasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeWebRuleBlackListUsageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRuleBlackListUsageResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWebRuleBlackListUsageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeWebRuleWhiteListGeoAreasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'EnableWebRuleWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableWebRuleWhiteListResultShape', ],
                'error' =>  [ 'shape' => 'EnableWebRuleWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableWebRuleWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableWebRuleWhiteListResultShape', ],
                'error' =>  [ 'shape' => 'DisableWebRuleWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWebRuleWhiteListUsageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRuleWhiteListUsageResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWebRuleWhiteListUsageResultShape', ],
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
        'ModifyBlackListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webBlackListRuleSpec' =>  [ 'shape' => 'WebBlackListRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webBlackListRuleId' => [ 'type' => 'string', 'locationName' => 'webBlackListRuleId', ],
            ],
        ],
        'DisableCCProtectionRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'ccProtectionRuleId' => [ 'type' => 'string', 'locationName' => 'ccProtectionRuleId', ],
            ],
        ],
        'ModifyBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyWhiteListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyWhiteListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyWhiteListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWhiteListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webWhiteListRuleId' => [ 'type' => 'string', 'locationName' => 'webWhiteListRuleId', ],
            ],
        ],
        'DescribeWebRuleBlackListUsageResultShape' => [
            'type' => 'structure',
            'members' => [
                'allocatedNum' => [ 'type' => 'integer', 'locationName' => 'allocatedNum', ],
                'activeNum' => [ 'type' => 'integer', 'locationName' => 'activeNum', ],
                'surplusAllocateNum' => [ 'type' => 'integer', 'locationName' => 'surplusAllocateNum', ],
                'maxAllocateNum' => [ 'type' => 'integer', 'locationName' => 'maxAllocateNum', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeCCProtectionRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'ccProtectionRuleId' => [ 'type' => 'string', 'locationName' => 'ccProtectionRuleId', ],
            ],
        ],
        'DescribeWebRuleBlackListGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'DescribeCCProtectionRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCProtectionRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCProtectionRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCCProtectionRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'ccProtectionRuleId' => [ 'type' => 'string', 'locationName' => 'ccProtectionRuleId', ],
            ],
        ],
        'CreateCCProtectionRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCCProtectionRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateCCProtectionRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCCProtectionRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ccProtectionRuleSpec' =>  [ 'shape' => 'CCProtectionRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'ccProtectionRuleId' => [ 'type' => 'string', 'locationName' => 'ccProtectionRuleId', ],
            ],
        ],
        'DisableWebRuleCCObserverModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyCCProtectionConfigOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ccProtectionConfigSpec' =>  [ 'shape' => 'CCProtectionConfigSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeCCProtectionConfigOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DeleteWhiteListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableWebRuleCCObserverModeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableWebRuleCCObserverModeResultShape', ],
                'error' =>  [ 'shape' => 'DisableWebRuleCCObserverModeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWebRuleWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyCCProtectionConfigOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableWhiteListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeCCProtectionRulesOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyCCProtectionConfigOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCCProtectionConfigOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyCCProtectionConfigOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBlackListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webBlackListRuleId' => [ 'type' => 'string', 'locationName' => 'webBlackListRuleId', ],
            ],
        ],
        'EnableWebRuleCCObserverModeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableWebRuleCCObserverModeResultShape', ],
                'error' =>  [ 'shape' => 'EnableWebRuleCCObserverModeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCCProtectionRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ccProtectionRuleSpec' =>  [ 'shape' => 'CCProtectionRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeWebRuleWhiteListGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'EnableWebRuleCCObserverModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeCCProtectionDefaultConfigOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CCProtectionDefaultConfig', ],
            ],
        ],
        'DisableWebRuleWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeWhiteListRulesOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListRulesOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWhiteListRulesOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteWhiteListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteWhiteListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DeleteWhiteListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWebRuleWhiteListUsageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeCCProtectionRulesOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CCProtectionRule', ], ],
                'currentCount' => [ 'type' => 'long', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'long', 'locationName' => 'totalPage', ],
            ],
        ],
        'DescribeCCProtectionConfigOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CCProtectionConfig', ],
            ],
        ],
        'DisableWebRuleCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'EnableWebRuleBlackListResultShape' => [
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DisableWebRuleWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeWebRuleBlackListGeoAreasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRuleBlackListGeoAreasResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWebRuleBlackListGeoAreasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchWebRuleOriginResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CreateBlackListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBlackListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateBlackListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyBlackListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyBlackListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyBlackListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableBlackListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableBlackListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'EnableBlackListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebBlackListRule', ],
            ],
        ],
        'EnableWhiteListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webWhiteListRuleId' => [ 'type' => 'string', 'locationName' => 'webWhiteListRuleId', ],
            ],
        ],
        'DescribeCCProtectionRulesOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCProtectionRulesOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCProtectionRulesOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableBlackListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableBlackListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DisableBlackListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyCertInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableWebRuleBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DisableWebRuleBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableWebRuleBlackListResultShape', ],
                'error' =>  [ 'shape' => 'DisableWebRuleBlackListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWhiteListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebWhiteListRule', ],
            ],
        ],
        'SwitchWebRuleProtectResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeWebRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableWebRuleCCObserverModeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeWebRuleBlackListUsageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'EnableCCProtectionRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'ccProtectionRuleId' => [ 'type' => 'string', 'locationName' => 'ccProtectionRuleId', ],
            ],
        ],
        'EnableWebRuleWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'DeleteCCProtectionRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCCProtectionRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DeleteCCProtectionRuleOfWebRuleResultShape', ],
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
        'SwitchWebRuleOriginRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'SwitchWebRuleProtectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DisableWebRuleBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyCCProtectionRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCCProtectionRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyCCProtectionRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCertInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certInfoModifySpec' =>  [ 'shape' => 'CertInfoModifySpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeWhiteListRulesOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeCCProtectionRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CCProtectionRule', ],
            ],
        ],
        'DisableBlackListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webBlackListRuleId' => [ 'type' => 'string', 'locationName' => 'webBlackListRuleId', ],
            ],
        ],
        'EnableWebRuleBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableWebRuleBlackListResultShape', ],
                'error' =>  [ 'shape' => 'EnableWebRuleBlackListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWebRuleBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeCCProtectionDefaultConfigOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCProtectionDefaultConfigOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCProtectionDefaultConfigOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCCProtectionRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableCCProtectionRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DisableCCProtectionRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableCCProtectionRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableBlackListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webBlackListRuleId' => [ 'type' => 'string', 'locationName' => 'webBlackListRuleId', ],
            ],
        ],
        'DescribeWhiteListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWhiteListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWhiteListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteCCProtectionRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeWebRuleWhiteListUsageResultShape' => [
            'type' => 'structure',
            'members' => [
                'allocatedNum' => [ 'type' => 'integer', 'locationName' => 'allocatedNum', ],
                'activeNum' => [ 'type' => 'integer', 'locationName' => 'activeNum', ],
                'surplusAllocateNum' => [ 'type' => 'integer', 'locationName' => 'surplusAllocateNum', ],
                'maxAllocateNum' => [ 'type' => 'integer', 'locationName' => 'maxAllocateNum', ],
            ],
        ],
        'DescribeWebRuleWhiteListGeoAreasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRuleWhiteListGeoAreasResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWebRuleWhiteListGeoAreasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyWhiteListRuleOfWebRuleResultShape' => [
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
        'DescribeWhiteListRulesOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebWhiteListRule', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'CreateWhiteListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableCCProtectionRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableWhiteListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteBlackListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webBlackListRuleId' => [ 'type' => 'string', 'locationName' => 'webBlackListRuleId', ],
            ],
        ],
        'ModifyCCProtectionRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DescribeBlackListRulesOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'EnableBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'CreateWhiteListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateWhiteListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateWhiteListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableCCProtectionRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableCCProtectionRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'EnableCCProtectionRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBlackListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBlackListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeBlackListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'CreateBlackListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webBlackListRuleSpec' =>  [ 'shape' => 'WebBlackListRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DeleteBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'CreateWhiteListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webWhiteListRuleSpec' =>  [ 'shape' => 'WebWhiteListRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyWhiteListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webWhiteListRuleSpec' =>  [ 'shape' => 'WebWhiteListRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webWhiteListRuleId' => [ 'type' => 'string', 'locationName' => 'webWhiteListRuleId', ],
            ],
        ],
        'CreateCCProtectionRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableWebRuleCCResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableWebRuleCCObserverModeResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableWhiteListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webWhiteListRuleId' => [ 'type' => 'string', 'locationName' => 'webWhiteListRuleId', ],
            ],
        ],
        'DeleteWhiteListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webWhiteListRuleId' => [ 'type' => 'string', 'locationName' => 'webWhiteListRuleId', ],
            ],
        ],
        'DescribeCCProtectionDefaultConfigOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'EnableWebRuleCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webRuleSpec' =>  [ 'shape' => 'WebRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'DescribeBlackListRulesOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBlackListRulesOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeBlackListRulesOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableWhiteListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableWhiteListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DisableWhiteListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteBlackListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteBlackListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DeleteBlackListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWhiteListRuleOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableWhiteListRuleOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'EnableWhiteListRuleOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBlackListRulesOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebBlackListRule', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
    ],
];
