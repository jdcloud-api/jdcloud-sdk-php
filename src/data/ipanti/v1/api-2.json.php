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
    ],
];
