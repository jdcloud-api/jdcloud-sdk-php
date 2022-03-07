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
        'DescribeDDoSIpAttackLogs' => [
            'name' => 'DescribeDDoSIpAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:describeDDoSIpAttackLogs',
            ],
            'input' => [ 'shape' => 'DescribeDDoSIpAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDDoSIpAttackLogsResponseShape', ],
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
        'DescribeBusinessGraph' => [
            'name' => 'DescribeBusinessGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:businessGraph',
            ],
            'input' => [ 'shape' => 'DescribeBusinessGraphRequestShape', ],
            'output' => [ 'shape' => 'DescribeBusinessGraphResponseShape', ],
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
        'DescribeStatusGraph' => [
            'name' => 'DescribeStatusGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:statusGraph',
            ],
            'input' => [ 'shape' => 'DescribeStatusGraphRequestShape', ],
            'output' => [ 'shape' => 'DescribeStatusGraphResponseShape', ],
        ],
        'DescribeConnStatGraph' => [
            'name' => 'DescribeConnStatGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:connStatGraph',
            ],
            'input' => [ 'shape' => 'DescribeConnStatGraphRequestShape', ],
            'output' => [ 'shape' => 'DescribeConnStatGraphResponseShape', ],
        ],
        'DescribeDispatchRules' => [
            'name' => 'DescribeDispatchRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/dispatchRules',
            ],
            'input' => [ 'shape' => 'DescribeDispatchRulesRequestShape', ],
            'output' => [ 'shape' => 'DescribeDispatchRulesResponseShape', ],
        ],
        'CreateDispatchRule' => [
            'name' => 'CreateDispatchRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/dispatchRules',
            ],
            'input' => [ 'shape' => 'CreateDispatchRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateDispatchRuleResponseShape', ],
        ],
        'CreateDispatchRules' => [
            'name' => 'CreateDispatchRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:createDispatchRules',
            ],
            'input' => [ 'shape' => 'CreateDispatchRulesRequestShape', ],
            'output' => [ 'shape' => 'CreateDispatchRulesResponseShape', ],
        ],
        'ModifyDispatchRule' => [
            'name' => 'ModifyDispatchRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/dispatchRules/{dispatchRuleId}',
            ],
            'input' => [ 'shape' => 'ModifyDispatchRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyDispatchRuleResponseShape', ],
        ],
        'DeleteDispatchRule' => [
            'name' => 'DeleteDispatchRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/dispatchRules/{dispatchRuleId}',
            ],
            'input' => [ 'shape' => 'DeleteDispatchRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteDispatchRuleResponseShape', ],
        ],
        'SwitchDispatchRuleProtect' => [
            'name' => 'SwitchDispatchRuleProtect',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/dispatchRules/{dispatchRuleId}:protect',
            ],
            'input' => [ 'shape' => 'SwitchDispatchRuleProtectRequestShape', ],
            'output' => [ 'shape' => 'SwitchDispatchRuleProtectResponseShape', ],
        ],
        'SwitchDispatchRuleOrigin' => [
            'name' => 'SwitchDispatchRuleOrigin',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/dispatchRules/{dispatchRuleId}:origin',
            ],
            'input' => [ 'shape' => 'SwitchDispatchRuleOriginRequestShape', ],
            'output' => [ 'shape' => 'SwitchDispatchRuleOriginResponseShape', ],
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
        'CreateForwardRules' => [
            'name' => 'CreateForwardRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:createForwardRules',
            ],
            'input' => [ 'shape' => 'CreateForwardRulesRequestShape', ],
            'output' => [ 'shape' => 'CreateForwardRulesResponseShape', ],
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
        'DescribeInstanceAcl' => [
            'name' => 'DescribeInstanceAcl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeInstanceAcl',
            ],
            'input' => [ 'shape' => 'DescribeInstanceAclRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceAclResponseShape', ],
        ],
        'ModifyInstanceAcl' => [
            'name' => 'ModifyInstanceAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceAcl',
            ],
            'input' => [ 'shape' => 'ModifyInstanceAclRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceAclResponseShape', ],
        ],
        'RecoverInstanceAcl' => [
            'name' => 'RecoverInstanceAcl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:recoverInstanceAcl',
            ],
            'input' => [ 'shape' => 'RecoverInstanceAclRequestShape', ],
            'output' => [ 'shape' => 'RecoverInstanceAclResponseShape', ],
        ],
        'DescribeCustomPages' => [
            'name' => 'DescribeCustomPages',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/customPages',
            ],
            'input' => [ 'shape' => 'DescribeCustomPagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCustomPagesResponseShape', ],
        ],
        'CreateCustomPage' => [
            'name' => 'CreateCustomPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/customPages',
            ],
            'input' => [ 'shape' => 'CreateCustomPageRequestShape', ],
            'output' => [ 'shape' => 'CreateCustomPageResponseShape', ],
        ],
        'ModifyCustomPage' => [
            'name' => 'ModifyCustomPage',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/customPages/{pageId}',
            ],
            'input' => [ 'shape' => 'ModifyCustomPageRequestShape', ],
            'output' => [ 'shape' => 'ModifyCustomPageResponseShape', ],
        ],
        'DeleteCustomPage' => [
            'name' => 'DeleteCustomPage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/customPages/{pageId}',
            ],
            'input' => [ 'shape' => 'DeleteCustomPageRequestShape', ],
            'output' => [ 'shape' => 'DeleteCustomPageResponseShape', ],
        ],
        'ModifyInstanceCustomPage' => [
            'name' => 'ModifyInstanceCustomPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/customPages/{pageId}:modifyInstanceCustomPage',
            ],
            'input' => [ 'shape' => 'ModifyInstanceCustomPageRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceCustomPageResponseShape', ],
        ],
        'ModifyInstanceCustomPageDefault' => [
            'name' => 'ModifyInstanceCustomPageDefault',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:modifyInstanceCustomPageDefault',
            ],
            'input' => [ 'shape' => 'ModifyInstanceCustomPageDefaultRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceCustomPageDefaultResponseShape', ],
        ],
        'EnableInstanceCustomPage' => [
            'name' => 'EnableInstanceCustomPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableInstanceCustomPage',
            ],
            'input' => [ 'shape' => 'EnableInstanceCustomPageRequestShape', ],
            'output' => [ 'shape' => 'EnableInstanceCustomPageResponseShape', ],
        ],
        'DisableInstanceCustomPage' => [
            'name' => 'DisableInstanceCustomPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableInstanceCustomPage',
            ],
            'input' => [ 'shape' => 'DisableInstanceCustomPageRequestShape', ],
            'output' => [ 'shape' => 'DisableInstanceCustomPageResponseShape', ],
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
        'DescribeOriginWhiteIpList' => [
            'name' => 'DescribeOriginWhiteIpList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeOriginWhiteIpList',
            ],
            'input' => [ 'shape' => 'DescribeOriginWhiteIpListRequestShape', ],
            'output' => [ 'shape' => 'DescribeOriginWhiteIpListResponseShape', ],
        ],
        'DescribeServiceIpList' => [
            'name' => 'DescribeServiceIpList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:describeServiceIpList',
            ],
            'input' => [ 'shape' => 'DescribeServiceIpListRequestShape', ],
            'output' => [ 'shape' => 'DescribeServiceIpListResponseShape', ],
        ],
        'DescribeInstanceIdByResourceId' => [
            'name' => 'DescribeInstanceIdByResourceId',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeInstanceIdByResourceId',
            ],
            'input' => [ 'shape' => 'DescribeInstanceIdByResourceIdRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceIdByResourceIdResponseShape', ],
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
        'DescribeProtectionOutline' => [
            'name' => 'DescribeProtectionOutline',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeProtectionOutline',
            ],
            'input' => [ 'shape' => 'DescribeProtectionOutlineRequestShape', ],
            'output' => [ 'shape' => 'DescribeProtectionOutlineResponseShape', ],
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
        'DescribeCcsIpList' => [
            'name' => 'DescribeCcsIpList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ccsIpResources',
            ],
            'input' => [ 'shape' => 'DescribeCcsIpListRequestShape', ],
            'output' => [ 'shape' => 'DescribeCcsIpListResponseShape', ],
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
        'CreateWebRules' => [
            'name' => 'CreateWebRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:createWebRules',
            ],
            'input' => [ 'shape' => 'CreateWebRulesRequestShape', ],
            'output' => [ 'shape' => 'CreateWebRulesResponseShape', ],
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
        'BindCert' => [
            'name' => 'BindCert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:bindCert',
            ],
            'input' => [ 'shape' => 'BindCertRequestShape', ],
            'output' => [ 'shape' => 'BindCertResponseShape', ],
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
        'DescribeJsPagesOfWebRule' => [
            'name' => 'DescribeJsPagesOfWebRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/jsPages',
            ],
            'input' => [ 'shape' => 'DescribeJsPagesOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DescribeJsPagesOfWebRuleResponseShape', ],
        ],
        'CreateJsPageOfWebRule' => [
            'name' => 'CreateJsPageOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/jsPages',
            ],
            'input' => [ 'shape' => 'CreateJsPageOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateJsPageOfWebRuleResponseShape', ],
        ],
        'CreateJsPagesOfWebRule' => [
            'name' => 'CreateJsPagesOfWebRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:createJsPagesOfWebRule',
            ],
            'input' => [ 'shape' => 'CreateJsPagesOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateJsPagesOfWebRuleResponseShape', ],
        ],
        'ModifyJsPageOfWebRule' => [
            'name' => 'ModifyJsPageOfWebRule',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/jsPages/{jsPageId}',
            ],
            'input' => [ 'shape' => 'ModifyJsPageOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'ModifyJsPageOfWebRuleResponseShape', ],
        ],
        'DeleteJsPageOfWebRule' => [
            'name' => 'DeleteJsPageOfWebRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}/jsPages/{jsPageId}',
            ],
            'input' => [ 'shape' => 'DeleteJsPageOfWebRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteJsPageOfWebRuleResponseShape', ],
        ],
        'DisableWebRuleJsPage' => [
            'name' => 'DisableWebRuleJsPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:disableWebRuleJsPage',
            ],
            'input' => [ 'shape' => 'DisableWebRuleJsPageRequestShape', ],
            'output' => [ 'shape' => 'DisableWebRuleJsPageResponseShape', ],
        ],
        'EnableWebRuleJsPage' => [
            'name' => 'EnableWebRuleJsPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:enableWebRuleJsPage',
            ],
            'input' => [ 'shape' => 'EnableWebRuleJsPageRequestShape', ],
            'output' => [ 'shape' => 'EnableWebRuleJsPageResponseShape', ],
        ],
        'ModifyWebRuleJsPageToAll' => [
            'name' => 'ModifyWebRuleJsPageToAll',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:modifyWebRuleJsPageToAll',
            ],
            'input' => [ 'shape' => 'ModifyWebRuleJsPageToAllRequestShape', ],
            'output' => [ 'shape' => 'ModifyWebRuleJsPageToAllResponseShape', ],
        ],
        'ModifyWebRuleJsPageToCustom' => [
            'name' => 'ModifyWebRuleJsPageToCustom',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:modifyWebRuleJsPageToCustom',
            ],
            'input' => [ 'shape' => 'ModifyWebRuleJsPageToCustomRequestShape', ],
            'output' => [ 'shape' => 'ModifyWebRuleJsPageToCustomResponseShape', ],
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
        'EnableWebRuleCCProtectionRule' => [
            'name' => 'EnableWebRuleCCProtectionRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:enableWebRuleCCProtectionRule',
            ],
            'input' => [ 'shape' => 'EnableWebRuleCCProtectionRuleRequestShape', ],
            'output' => [ 'shape' => 'EnableWebRuleCCProtectionRuleResponseShape', ],
        ],
        'DisableWebRuleCCProtectionRule' => [
            'name' => 'DisableWebRuleCCProtectionRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/webRules/{webRuleId}:disableWebRuleCCProtectionRule',
            ],
            'input' => [ 'shape' => 'DisableWebRuleCCProtectionRuleRequestShape', ],
            'output' => [ 'shape' => 'DisableWebRuleCCProtectionRuleResponseShape', ],
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
        'DescribeWebRuleRSGeoAreas' => [
            'name' => 'DescribeWebRuleRSGeoAreas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/describeWebRuleRSGeoAreas',
            ],
            'input' => [ 'shape' => 'DescribeWebRuleRSGeoAreasRequestShape', ],
            'output' => [ 'shape' => 'DescribeWebRuleRSGeoAreasResponseShape', ],
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
                'errorCode' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'errorCodePercent' => [ 'type' => 'integer', 'locationName' => 'errorCodePercent', ],
                'errorCodeCount' => [ 'type' => 'integer', 'locationName' => 'errorCodeCount', ],
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
                'errorCode' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'errorCodePercent' => [ 'type' => 'integer', 'locationName' => 'errorCodePercent', ],
                'errorCodeCount' => [ 'type' => 'integer', 'locationName' => 'errorCodeCount', ],
            ],
        ],
        'AttackTypeCount' => [
            'type' => 'structure',
            'members' => [
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'AutoRenewalSpec' => [
            'type' => 'structure',
            'members' => [
                'autoRenewalEnable' => [ 'type' => 'boolean', 'locationName' => 'autoRenewalEnable', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
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
                'pageId' => [ 'type' => 'string', 'locationName' => 'pageId', ],
                'pageName' => [ 'type' => 'string', 'locationName' => 'pageName', ],
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
                'pageId' => [ 'type' => 'string', 'locationName' => 'pageId', ],
                'pageName' => [ 'type' => 'string', 'locationName' => 'pageName', ],
            ],
        ],
        'CcsIpResource' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'resourceType' => [ 'type' => 'integer', 'locationName' => 'resourceType', ],
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
                'ipCount' => [ 'type' => 'integer', 'locationName' => 'ipCount', ],
                'portCount' => [ 'type' => 'integer', 'locationName' => 'portCount', ],
                'domainCount' => [ 'type' => 'integer', 'locationName' => 'domainCount', ],
                'bp' => [ 'type' => 'integer', 'locationName' => 'bp', ],
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
                'bw' => [ 'type' => 'integer', 'locationName' => 'bw', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'CustomPageSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'CustomPage' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'DDoSIpAttackLog' => [
            'type' => 'structure',
            'members' => [
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'attackTraffic' => [ 'type' => 'double', 'locationName' => 'attackTraffic', ],
                'blackHole' => [ 'type' => 'integer', 'locationName' => 'blackHole', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
        'DispatchedInnerIp' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DispatchRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'innerIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dispatchThresholdMbps' => [ 'type' => 'long', 'locationName' => 'dispatchThresholdMbps', ],
                'dispatchThresholdPps' => [ 'type' => 'long', 'locationName' => 'dispatchThresholdPps', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'ModifyDispatchRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'innerIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dispatchThresholdMbps' => [ 'type' => 'long', 'locationName' => 'dispatchThresholdMbps', ],
                'dispatchThresholdPps' => [ 'type' => 'long', 'locationName' => 'dispatchThresholdPps', ],
            ],
        ],
        'CreateDispatchRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'innerIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dispatchThresholdMbps' => [ 'type' => 'long', 'locationName' => 'dispatchThresholdMbps', ],
                'dispatchThresholdPps' => [ 'type' => 'long', 'locationName' => 'dispatchThresholdPps', ],
            ],
        ],
        'FailedRule' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'ServiceIpConfig' => [
            'type' => 'structure',
            'members' => [
                'serviceIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceIpConfigItem', ], ],
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
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'serviceIpConfig' =>  [ 'shape' => 'ServiceIpConfig', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'originAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriginAddrItem', ], ],
                'onlineAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'originPort' => [ 'type' => 'integer', 'locationName' => 'originPort', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'ServiceIpConfigItem' => [
            'type' => 'structure',
            'members' => [
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'securityStatus' => [ 'type' => 'string', 'locationName' => 'securityStatus', ],
                'useStatus' => [ 'type' => 'integer', 'locationName' => 'useStatus', ],
            ],
        ],
        'ForwardRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'serviceIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'originType' => [ 'type' => 'string', 'locationName' => 'originType', ],
                'originAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriginAddrItem', ], ],
                'onlineAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'originPort' => [ 'type' => 'integer', 'locationName' => 'originPort', ],
            ],
        ],
        'FailedPort' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'GeoRsRoute' => [
            'type' => 'structure',
            'members' => [
                'geo' => [ 'type' => 'string', 'locationName' => 'geo', ],
                'rsAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ServiceIp' => [
            'type' => 'structure',
            'members' => [
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'securityStatus' => [ 'type' => 'string', 'locationName' => 'securityStatus', ],
            ],
        ],
        'InstanceName' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'InstanceTagEnable' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'tagEnable' => [ 'type' => 'boolean', 'locationName' => 'tagEnable', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'InstanceBillingId' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'billingIdBP' => [ 'type' => 'string', 'locationName' => 'billingIdBP', ],
                'billingIdEP' => [ 'type' => 'string', 'locationName' => 'billingIdEP', ],
            ],
        ],
        'Instance' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'carrier' => [ 'type' => 'integer', 'locationName' => 'carrier', ],
                'ipType' => [ 'type' => 'integer', 'locationName' => 'ipType', ],
                'ipCount' => [ 'type' => 'integer', 'locationName' => 'ipCount', ],
                'portCount' => [ 'type' => 'integer', 'locationName' => 'portCount', ],
                'domainCount' => [ 'type' => 'integer', 'locationName' => 'domainCount', ],
                'elasticTriggerCount' => [ 'type' => 'integer', 'locationName' => 'elasticTriggerCount', ],
                'abovePeakCount' => [ 'type' => 'integer', 'locationName' => 'abovePeakCount', ],
                'inBitslimit' => [ 'type' => 'integer', 'locationName' => 'inBitslimit', ],
                'resilientBitslimit' => [ 'type' => 'integer', 'locationName' => 'resilientBitslimit', ],
                'businessBitslimit' => [ 'type' => 'integer', 'locationName' => 'businessBitslimit', ],
                'ccThreshold' => [ 'type' => 'integer', 'locationName' => 'ccThreshold', ],
                'ccPeakQPS' => [ 'type' => 'integer', 'locationName' => 'ccPeakQPS', ],
                'ruleCount' => [ 'type' => 'integer', 'locationName' => 'ruleCount', ],
                'webRuleCount' => [ 'type' => 'integer', 'locationName' => 'webRuleCount', ],
                'dispatchRuleCount' => [ 'type' => 'integer', 'locationName' => 'dispatchRuleCount', ],
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
                'pageId' => [ 'type' => 'string', 'locationName' => 'pageId', ],
                'pageName' => [ 'type' => 'string', 'locationName' => 'pageName', ],
                'pageStatus' => [ 'type' => 'integer', 'locationName' => 'pageStatus', ],
                'webRulePortLimit' => [ 'type' => 'integer', 'locationName' => 'webRulePortLimit', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'IpSet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'InstanceAcl' => [
            'type' => 'structure',
            'members' => [
                'blackListIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSet', ], ],
                'whiteListIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSet', ], ],
                'geoBlack' => [ 'type' => 'list', 'member' => [ 'shape' => 'Geo', ], ],
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'canRecover' => [ 'type' => 'boolean', 'locationName' => 'canRecover', ],
            ],
        ],
        'ModifyInstanceAclGEOSpec' => [
            'type' => 'structure',
            'members' => [
                'geoBlack' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WhiteIpSet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
            ],
        ],
        'BlackIpSet' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
            ],
        ],
        'BlackIpSetSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'WhiteIpSetSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'InstanceAclSpec' => [
            'type' => 'structure',
            'members' => [
                'blackListIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'whiteListIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'geoBlack' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'InstanceIdName' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'InstanceIdVo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'IpBwListSpec' => [
            'type' => 'structure',
            'members' => [
                'ipList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tryFlag' => [ 'type' => 'boolean', 'locationName' => 'tryFlag', ],
            ],
        ],
        'IpSetSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'ip' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JsPageSpec' => [
            'type' => 'structure',
            'members' => [
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
            ],
        ],
        'JsPage' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'JsPagesSpec' => [
            'type' => 'structure',
            'members' => [
                'uris' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'pageId' => [ 'type' => 'string', 'locationName' => 'pageId', ],
                'pageName' => [ 'type' => 'string', 'locationName' => 'pageName', ],
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
                'pageId' => [ 'type' => 'string', 'locationName' => 'pageId', ],
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
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'serviceIpConfig' =>  [ 'shape' => 'ServiceIpConfig', ],
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
                'bindCerts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cert', ], ],
                'forceJump' => [ 'type' => 'integer', 'locationName' => 'forceJump', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'ccStatus' => [ 'type' => 'integer', 'locationName' => 'ccStatus', ],
                'webSocketStatus' => [ 'type' => 'integer', 'locationName' => 'webSocketStatus', ],
                'blackListEnable' => [ 'type' => 'integer', 'locationName' => 'blackListEnable', ],
                'whiteListEnable' => [ 'type' => 'integer', 'locationName' => 'whiteListEnable', ],
                'geoRsRoute' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoRsRoute', ], ],
                'enableKeepalive' => [ 'type' => 'string', 'locationName' => 'enableKeepalive', ],
                'httpVersion' => [ 'type' => 'string', 'locationName' => 'httpVersion', ],
                'sslProtocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'suiteLevel' => [ 'type' => 'string', 'locationName' => 'suiteLevel', ],
                'userSuiteLevel' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'jsFingerprintEnable' => [ 'type' => 'integer', 'locationName' => 'jsFingerprintEnable', ],
                'jsFingerprintScope' => [ 'type' => 'integer', 'locationName' => 'jsFingerprintScope', ],
                'ccCustomStatus' => [ 'type' => 'integer', 'locationName' => 'ccCustomStatus', ],
                'enableHealthCheck' => [ 'type' => 'integer', 'locationName' => 'enableHealthCheck', ],
                'proxyConnectTimeout' => [ 'type' => 'integer', 'locationName' => 'proxyConnectTimeout', ],
                'enableUnderscores' => [ 'type' => 'integer', 'locationName' => 'enableUnderscores', ],
            ],
        ],
        'Cert' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
            ],
        ],
        'WebRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'serviceIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
                'geoRsRoute' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoRsRoute', ], ],
                'enableKeepalive' => [ 'type' => 'string', 'locationName' => 'enableKeepalive', ],
                'httpVersion' => [ 'type' => 'string', 'locationName' => 'httpVersion', ],
                'sslProtocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'suiteLevel' => [ 'type' => 'string', 'locationName' => 'suiteLevel', ],
                'userSuiteLevel' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enableHealthCheck' => [ 'type' => 'integer', 'locationName' => 'enableHealthCheck', ],
                'proxyConnectTimeout' => [ 'type' => 'integer', 'locationName' => 'proxyConnectTimeout', ],
                'enableUnderscores' => [ 'type' => 'integer', 'locationName' => 'enableUnderscores', ],
            ],
        ],
        'FailedDomain' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DescribeDDoSIpAttackLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDDoSIpAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDDoSIpAttackLogsResultShape', ],
                'error' =>  [ 'shape' => 'DescribeDDoSIpAttackLogsResultShape', ],
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
                'serviceIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeDDoSIpAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DDoSIpAttackLog', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
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
                'serviceIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeBusinessGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeBusinessGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBusinessGraphResultShape', ],
                'error' =>  [ 'shape' => 'DescribeBusinessGraphResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeStatusGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'status500' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'status502' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'status504' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'status590' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'status592' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'status594' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'status5xx' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeBusinessGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'inTraffic' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'outTraffic' => [ 'type' => 'list', 'member' => [ 'type' => 'double', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DescribeConnStatGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConnStatGraphResultShape', ],
                'error' =>  [ 'shape' => 'DescribeConnStatGraphResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeStatusGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeStatusGraphResultShape', ],
                'error' =>  [ 'shape' => 'DescribeStatusGraphResultShape', ],
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
        'DescribeStatusGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeConnStatGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'newConn' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'activeConn' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'inactiveConn' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'DescribeConnStatGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeDDoSGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'serviceIp' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'CreateDispatchRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dispatchRuleSpecList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateDispatchRuleSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeDispatchRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'innerIp' => [ 'type' => 'string', 'locationName' => 'innerIp', ],
                'serviceIp' => [ 'type' => 'string', 'locationName' => 'serviceIp', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteDispatchRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteDispatchRuleResultShape', ],
                'error' =>  [ 'shape' => 'DeleteDispatchRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDispatchRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyDispatchRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'modifyDispatchRuleSpec' =>  [ 'shape' => 'ModifyDispatchRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dispatchRuleId' => [ 'type' => 'string', 'locationName' => 'dispatchRuleId', ],
            ],
        ],
        'DeleteDispatchRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dispatchRuleId' => [ 'type' => 'string', 'locationName' => 'dispatchRuleId', ],
            ],
        ],
        'SwitchDispatchRuleOriginResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SwitchDispatchRuleOriginResultShape', ],
                'error' =>  [ 'shape' => 'SwitchDispatchRuleOriginResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchDispatchRuleProtectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'SwitchDispatchRuleProtectResultShape', ],
                'error' =>  [ 'shape' => 'SwitchDispatchRuleProtectResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDispatchRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDispatchRulesResultShape', ],
                'error' =>  [ 'shape' => 'CreateDispatchRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchDispatchRuleProtectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dispatchRuleId' => [ 'type' => 'string', 'locationName' => 'dispatchRuleId', ],
            ],
        ],
        'DescribeDispatchRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DispatchRule', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'SwitchDispatchRuleProtectResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeDispatchRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDispatchRulesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeDispatchRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDispatchRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createDispatchRuleSpec' =>  [ 'shape' => 'CreateDispatchRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateDispatchRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateDispatchRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateDispatchRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyDispatchRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteDispatchRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'SwitchDispatchRuleOriginResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyDispatchRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyDispatchRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyDispatchRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateDispatchRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dispatchRuleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedRule', ], ],
            ],
        ],
        'SwitchDispatchRuleOriginRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dispatchRuleId' => [ 'type' => 'string', 'locationName' => 'dispatchRuleId', ],
            ],
        ],
        'CreateForwardRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'forwardRuleSpecList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ForwardRuleSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'CreateForwardRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'forwardRuleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failedPorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedPort', ], ],
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
        'Sort' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'direction' => [ 'type' => 'string', 'locationName' => 'direction', ],
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
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
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
        'CreateForwardRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateForwardRulesResultShape', ],
                'error' =>  [ 'shape' => 'CreateForwardRulesResultShape', ],
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
        'DescribeProtectionStatisticsResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ProtectionStatistics', ],
            ],
        ],
        'DeleteCustomPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DeleteCustomPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pageId' => [ 'type' => 'string', 'locationName' => 'pageId', ],
            ],
        ],
        'DescribeProtectionOutlineRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCustomPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DescribeCustomPagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCustomPagesResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCustomPagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceCustomPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceCustomPageResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceCustomPageResultShape', ],
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
        'DescribeServiceIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeProtectionOutlineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeProtectionOutlineResultShape', ],
                'error' =>  [ 'shape' => 'DescribeProtectionOutlineResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeOriginWhiteIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeCpsIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceCustomPageDefaultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyInstanceCustomPageDefaultResultShape', ],
                'error' =>  [ 'shape' => 'ModifyInstanceCustomPageDefaultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeOriginWhiteIpListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeServiceIpListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeServiceIpListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeServiceIpListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'ModifyInstanceCustomPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyInstanceCustomPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pageId' => [ 'type' => 'string', 'locationName' => 'pageId', ],
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
        'DisableInstanceCustomPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'DescribeCustomPagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceIdByResourceIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceIdByResourceIdResultShape', ],
                'error' =>  [ 'shape' => 'DescribeInstanceIdByResourceIdResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAlarmConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'AlarmConfig', ],
            ],
        ],
        'DescribeInstanceIdByResourceIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DisableInstanceCustomPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableInstanceCustomPageResultShape', ],
                'error' =>  [ 'shape' => 'DisableInstanceCustomPageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceCustomPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeProtectionStatisticsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceCustomPageDefaultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeCcsIpListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCcsIpListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCcsIpListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RecoverInstanceAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateCustomPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCustomPageResultShape', ],
                'error' =>  [ 'shape' => 'CreateCustomPageResultShape', ],
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
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'ModifyInstanceAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceAclSpec' =>  [ 'shape' => 'InstanceAclSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyEPBResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyCustomPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCustomPageResultShape', ],
                'error' =>  [ 'shape' => 'ModifyCustomPageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'DescribeCcsIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCcsIpListResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CcsIpResource', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'DisableInstanceCustomPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'RecoverInstanceAclResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'RecoverInstanceAclResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceCustomPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyCustomPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'customPageSpec' =>  [ 'shape' => 'CustomPageSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'pageId' => [ 'type' => 'string', 'locationName' => 'pageId', ],
            ],
        ],
        'EnableInstanceCustomPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableInstanceCustomPageResultShape', ],
                'error' =>  [ 'shape' => 'EnableInstanceCustomPageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceCustomPageDefaultResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceIdByResourceIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'InstanceIdVo', ],
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
        'DescribeOriginWhiteIpListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeOriginWhiteIpListResultShape', ],
                'error' =>  [ 'shape' => 'DescribeOriginWhiteIpListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeServiceIpListResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceIp', ], ],
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'createInstanceSpec' =>  [ 'shape' => 'CreateInstanceSpec', ],
                'autoRenewalSpec' =>  [ 'shape' => 'AutoRenewalSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAlarmConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'DescribeInstanceAclRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeCustomPagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CustomPage', ], ],
            ],
        ],
        'ModifyCustomPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyInstanceAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
                'canRecover' => [ 'type' => 'boolean', 'locationName' => 'canRecover', ],
            ],
        ],
        'DescribeProtectionOutlineResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ProtectionOutline', ],
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteCustomPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteCustomPageResultShape', ],
                'error' =>  [ 'shape' => 'DeleteCustomPageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RecoverInstanceAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'CreateCustomPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'customPageSpec' =>  [ 'shape' => 'CustomPageSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceAclResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'InstanceAcl', ],
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
        'BatchResultDetail' => [
            'type' => 'structure',
            'members' => [
                'successCount' => [ 'type' => 'integer', 'locationName' => 'successCount', ],
                'failed' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorItem', ], ],
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
        'CreateBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableWebRuleJsPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'CreateWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeWebRuleBlackListGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'ModifyWebRuleJsPageToCustomRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'DisableWebRuleCCProtectionRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableWebRuleCCProtectionRuleResultShape', ],
                'error' =>  [ 'shape' => 'DisableWebRuleCCProtectionRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'ModifyJsPageOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyJsPageOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'ModifyJsPageOfWebRuleResultShape', ],
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
        'DisableWebRuleJsPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeWebRuleRSGeoAreasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRuleRSGeoAreasResultShape', ],
                'error' =>  [ 'shape' => 'DescribeWebRuleRSGeoAreasResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'EnableWebRuleCCObserverModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DisableWebRuleWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DescribeWebRuleRSGeoAreasRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'DescribeWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'CreateWebRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webRuleSpecList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebRuleSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateJsPageOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jsPageSpec' =>  [ 'shape' => 'JsPageSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'DescribeWebRuleRSGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'DescribeBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebBlackListRule', ],
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
        'DisableWebRuleBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'SwitchWebRuleProtectResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DisableWebRuleJsPageResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'CreateWebRuleResultShape' => [
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
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'ModifyWebRuleJsPageToAllResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyWebRuleJsPageToAllResultShape', ],
                'error' =>  [ 'shape' => 'ModifyWebRuleJsPageToAllResultShape', ],
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
        'BindCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'BindCertResultShape', ],
                'error' =>  [ 'shape' => 'BindCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'DescribeCCProtectionDefaultConfigOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCCProtectionDefaultConfigOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeCCProtectionDefaultConfigOfWebRuleResultShape', ],
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
        'DescribeJsPagesOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'ModifyWebRuleJsPageToCustomResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyWhiteListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DisableWhiteListRuleOfWebRuleResultShape' => [
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
        'EnableWebRuleCCProtectionRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableWebRuleCCProtectionRuleResultShape', ],
                'error' =>  [ 'shape' => 'EnableWebRuleCCProtectionRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateWebRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateWebRulesResultShape', ],
                'error' =>  [ 'shape' => 'CreateWebRulesResultShape', ],
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
        'EnableWebRuleJsPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'EnableWebRuleJsPageResultShape', ],
                'error' =>  [ 'shape' => 'EnableWebRuleJsPageResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'CreateJsPagesOfWebRuleResultShape' => [
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
        'DisableWebRuleCCProtectionRuleRequestShape' => [
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
        'ModifyCertInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCertInfoResultShape', ],
                'error' =>  [ 'shape' => 'ModifyCertInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableWebRuleJsPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableWebRuleJsPageResultShape', ],
                'error' =>  [ 'shape' => 'DisableWebRuleJsPageResultShape', ],
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
        'CreateJsPagesOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jsPagesSpec' =>  [ 'shape' => 'JsPagesSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'ModifyJsPageOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jsPageSpec' =>  [ 'shape' => 'JsPageSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'jsPageId' => [ 'type' => 'string', 'locationName' => 'jsPageId', ],
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
        'DeleteCCProtectionRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'ccProtectionRuleId' => [ 'type' => 'string', 'locationName' => 'ccProtectionRuleId', ],
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
        'ModifyWebRuleJsPageToAllRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'EnableWebRuleJsPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'CreateWebRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'webRuleIdIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'failedDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedDomain', ], ],
            ],
        ],
        'DeleteJsPageOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteJsPageOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DeleteJsPageOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWebRuleWhiteListGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Country', ], ],
            ],
        ],
        'DescribeCCProtectionDefaultConfigOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'CCProtectionDefaultConfig', ],
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
        'BindCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'EnableWebRuleBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'ModifyWebRuleJsPageToCustomResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyWebRuleJsPageToCustomResultShape', ],
                'error' =>  [ 'shape' => 'ModifyWebRuleJsPageToCustomResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'EnableWhiteListRuleOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'webWhiteListRuleId' => [ 'type' => 'string', 'locationName' => 'webWhiteListRuleId', ],
            ],
        ],
        'DisableWebRuleCCProtectionRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DescribeJsPagesOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeJsPagesOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'DescribeJsPagesOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCertInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'DescribeWebRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateJsPageOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
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
        'SwitchWebRuleOriginRequestShape' => [
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
        'CreateJsPagesOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateJsPagesOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateJsPagesOfWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'EnableWebRuleBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
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
        'ModifyWebRuleJsPageToAllResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteBlackListRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableWebRuleCCProtectionRuleResultShape' => [
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
        'DescribeJsPagesOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JsPage', ], ],
                'currentCount' => [ 'type' => 'long', 'locationName' => 'currentCount', ],
                'totalCount' => [ 'type' => 'long', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'long', 'locationName' => 'totalPage', ],
            ],
        ],
        'CreateCCProtectionRuleOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'EnableWebRuleCCProtectionRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'ModifyJsPageOfWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteJsPageOfWebRuleResultShape' => [
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
        'DescribeCCProtectionDefaultConfigOfWebRuleRequestShape' => [
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
        'CreateJsPageOfWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateJsPageOfWebRuleResultShape', ],
                'error' =>  [ 'shape' => 'CreateJsPageOfWebRuleResultShape', ],
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
        'DeleteJsPageOfWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
                'jsPageId' => [ 'type' => 'string', 'locationName' => 'jsPageId', ],
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
