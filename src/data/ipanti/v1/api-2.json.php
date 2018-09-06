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
        'DescribeDDosAttackLogs' => [
            'name' => 'DescribeDDosAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:ddos',
            ],
            'input' => [ 'shape' => 'DescribeDDosAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeDDosAttackLogsResponseShape', ],
        ],
        'DescribeCcAttackLogs' => [
            'name' => 'DescribeCcAttackLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:cc',
            ],
            'input' => [ 'shape' => 'DescribeCcAttackLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCcAttackLogsResponseShape', ],
        ],
        'DescribeCcAttackLogDetails' => [
            'name' => 'DescribeCcAttackLogDetails',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/attacklog:ccDetail',
            ],
            'input' => [ 'shape' => 'DescribeCcAttackLogDetailsRequestShape', ],
            'output' => [ 'shape' => 'DescribeCcAttackLogDetailsResponseShape', ],
        ],
        'DdosGraph' => [
            'name' => 'DdosGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:ddosGraph',
            ],
            'input' => [ 'shape' => 'DdosGraphRequestShape', ],
            'output' => [ 'shape' => 'DdosGraphResponseShape', ],
        ],
        'FwdGraph' => [
            'name' => 'FwdGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:fwdGraph',
            ],
            'input' => [ 'shape' => 'FwdGraphRequestShape', ],
            'output' => [ 'shape' => 'FwdGraphResponseShape', ],
        ],
        'CcGraph' => [
            'name' => 'CcGraph',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/charts:ccGraph',
            ],
            'input' => [ 'shape' => 'CcGraphRequestShape', ],
            'output' => [ 'shape' => 'CcGraphResponseShape', ],
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
        'ModifyInstanceName' => [
            'name' => 'ModifyInstanceName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rename',
            ],
            'input' => [ 'shape' => 'ModifyInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceNameResponseShape', ],
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
        'EnableCcObserverMode' => [
            'name' => 'EnableCcObserverMode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableCcObserverMode',
            ],
            'input' => [ 'shape' => 'EnableCcObserverModeRequestShape', ],
            'output' => [ 'shape' => 'EnableCcObserverModeResponseShape', ],
        ],
        'DisableCcObserverMode' => [
            'name' => 'DisableCcObserverMode',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableCcObserverMode',
            ],
            'input' => [ 'shape' => 'DisableCcObserverModeRequestShape', ],
            'output' => [ 'shape' => 'DisableCcObserverModeResponseShape', ],
        ],
        'EnableCcIpLimit' => [
            'name' => 'EnableCcIpLimit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:enableCcIpLimit',
            ],
            'input' => [ 'shape' => 'EnableCcIpLimitRequestShape', ],
            'output' => [ 'shape' => 'EnableCcIpLimitResponseShape', ],
        ],
        'DisableCcIpLimit' => [
            'name' => 'DisableCcIpLimit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:disableCcIpLimit',
            ],
            'input' => [ 'shape' => 'DisableCcIpLimitRequestShape', ],
            'output' => [ 'shape' => 'DisableCcIpLimitResponseShape', ],
        ],
        'SetCcIpLimit' => [
            'name' => 'SetCcIpLimit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setCcIpLimit',
            ],
            'input' => [ 'shape' => 'SetCcIpLimitRequestShape', ],
            'output' => [ 'shape' => 'SetCcIpLimitResponseShape', ],
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
    ],
    'shapes' => [
        'CCAttackLogDetail' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
            ],
        ],
        'CcIpLimitSpec' => [
            'type' => 'structure',
            'members' => [
                'ccSpeedLimit' => [ 'type' => 'integer', 'locationName' => 'ccSpeedLimit', ],
                'ccSpeedPeriod' => [ 'type' => 'integer', 'locationName' => 'ccSpeedPeriod', ],
            ],
        ],
        'CCSpec' => [
            'type' => 'structure',
            'members' => [
                'ccProtectMode' => [ 'type' => 'integer', 'locationName' => 'ccProtectMode', ],
                'ccThreshold' => [ 'type' => 'integer', 'locationName' => 'ccThreshold', ],
                'hostQps' => [ 'type' => 'integer', 'locationName' => 'hostQps', ],
                'hostUrlQps' => [ 'type' => 'integer', 'locationName' => 'hostUrlQps', ],
                'ipHostQps' => [ 'type' => 'integer', 'locationName' => 'ipHostQps', ],
                'ipHostUrlQps' => [ 'type' => 'integer', 'locationName' => 'ipHostUrlQps', ],
            ],
        ],
        'DDosAttackLog' => [
            'type' => 'structure',
            'members' => [
                'attackTraffic' => [ 'type' => 'float', 'locationName' => 'attackTraffic', ],
                'blackHole' => [ 'type' => 'integer', 'locationName' => 'blackHole', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
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
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'carrier' => [ 'type' => 'string', 'locationName' => 'carrier', ],
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
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'expireTime' => [ 'type' => 'long', 'locationName' => 'expireTime', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'ccProtectMode' => [ 'type' => 'integer', 'locationName' => 'ccProtectMode', ],
                'ccProtectStatus' => [ 'type' => 'integer', 'locationName' => 'ccProtectStatus', ],
                'ccSpeedLimit' => [ 'type' => 'integer', 'locationName' => 'ccSpeedLimit', ],
                'ccSpeedPeriod' => [ 'type' => 'integer', 'locationName' => 'ccSpeedPeriod', ],
                'ipBlackList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipBlackStatus' => [ 'type' => 'integer', 'locationName' => 'ipBlackStatus', ],
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipWhiteStatus' => [ 'type' => 'integer', 'locationName' => 'ipWhiteStatus', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'urlWhitelist' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'urlWhitelistStatus' => [ 'type' => 'integer', 'locationName' => 'urlWhitelistStatus', ],
                'hostQps' => [ 'type' => 'integer', 'locationName' => 'hostQps', ],
                'hostUrlQps' => [ 'type' => 'integer', 'locationName' => 'hostUrlQps', ],
                'ipHostQps' => [ 'type' => 'integer', 'locationName' => 'ipHostQps', ],
                'ipHostUrlQps' => [ 'type' => 'integer', 'locationName' => 'ipHostUrlQps', ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeUnit' => [ 'type' => 'integer', 'locationName' => 'timeUnit', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'carrier' => [ 'type' => 'string', 'locationName' => 'carrier', ],
                'bp' => [ 'type' => 'integer', 'locationName' => 'bp', ],
                'ep' => [ 'type' => 'integer', 'locationName' => 'ep', ],
                'bw' => [ 'type' => 'integer', 'locationName' => 'bw', ],
                'returnUrl' => [ 'type' => 'string', 'locationName' => 'returnUrl', ],
            ],
        ],
        'WebRule' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'instanceId' => [ 'type' => 'long', 'locationName' => 'instanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'httpsPort' => [ 'type' => 'string', 'locationName' => 'httpsPort', ],
                'originType' => [ 'type' => 'string', 'locationName' => 'originType', ],
                'originAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriginAddrItem', ], ],
                'onlineAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'httpsCertContent' => [ 'type' => 'string', 'locationName' => 'httpsCertContent', ],
                'httpsRsaKey' => [ 'type' => 'string', 'locationName' => 'httpsRsaKey', ],
                'httpCertStatus' => [ 'type' => 'integer', 'locationName' => 'httpCertStatus', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'ccStatus' => [ 'type' => 'integer', 'locationName' => 'ccStatus', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'forceJump' => [ 'type' => 'integer', 'locationName' => 'forceJump', ],
                'customPortStatus' => [ 'type' => 'integer', 'locationName' => 'customPortStatus', ],
                'httpOrigin' => [ 'type' => 'integer', 'locationName' => 'httpOrigin', ],
            ],
        ],
        'WebRuleSpec' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'protocol' => [ 'type' => 'string', 'locationName' => 'protocol', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'httpsPort' => [ 'type' => 'string', 'locationName' => 'httpsPort', ],
                'originType' => [ 'type' => 'string', 'locationName' => 'originType', ],
                'originAddr' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriginAddrItem', ], ],
                'onlineAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'httpsCertContent' => [ 'type' => 'string', 'locationName' => 'httpsCertContent', ],
                'httpsRsaKey' => [ 'type' => 'string', 'locationName' => 'httpsRsaKey', ],
                'algorithm' => [ 'type' => 'string', 'locationName' => 'algorithm', ],
                'forceJump' => [ 'type' => 'integer', 'locationName' => 'forceJump', ],
                'customPortStatus' => [ 'type' => 'integer', 'locationName' => 'customPortStatus', ],
                'httpOrigin' => [ 'type' => 'integer', 'locationName' => 'httpOrigin', ],
            ],
        ],
        'DescribeDDosAttackLogsRequestShape' => [
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
        'DescribeCcAttackLogDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CCAttackLogDetail', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeCcAttackLogDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'subDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCcAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCcAttackLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCcAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DDosAttackLog', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeCcAttackLogsRequestShape' => [
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
        'DescribeDDosAttackLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DDosAttackLog', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeCcAttackLogDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCcAttackLogDetailsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDDosAttackLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDDosAttackLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CcGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CcGraphResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'FwdGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'FwdGraphResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DdosGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DdosGraphResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DdosGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'DdosGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CcGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'postProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'preProtect' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'FwdGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'forwardRecord' => [ 'type' => 'list', 'member' => [ 'type' => 'number', ], ],
                'time' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'CcGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'subDomain' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'FwdGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'instanceId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
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
        'CreateForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SwitchForwardRuleProtectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeForwardRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ForwardRule', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeForwardRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
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
        'DescribeForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'ForwardRule', ],
            ],
        ],
        'DeleteForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteForwardRuleResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SwitchForwardRuleProtectResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SwitchForwardRuleOriginResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeForwardRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeForwardRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeForwardRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeForwardRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCcIpLimitResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableCcIpLimitRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInstanceIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInstanceUrlWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInstanceIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInstanceIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableInstanceIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableCcObserverModeResponseShape' => [
            'type' => 'structure',
            'members' => [
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
        'SetCcIpLimitResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCcIpLimitResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCcObserverModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInstanceIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetCcIpLimitResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInstanceCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceUrlWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableCcObserverModeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceUrlWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'urlWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Instance', ],
            ],
        ],
        'ModifyInstanceUrlWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderId' => [ 'type' => 'string', 'locationName' => 'orderId', ],
            ],
        ],
        'EnableCcObserverModeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceCCResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cCSpec' =>  [ 'shape' => 'CCSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInstanceIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyInstanceIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipBlackList' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInstanceIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInstanceCCResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInstanceUrlWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyInstanceIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableCcIpLimitResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetCcIpLimitRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cCSpec' =>  [ 'shape' => 'CcIpLimitSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableInstanceCCRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInstanceIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInstanceCCResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableCcObserverModeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'ModifyInstanceIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableInstanceUrlWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableCcObserverModeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableInstanceUrlWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableCcIpLimitResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceUrlWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DisableInstanceCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableInstanceUrlWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableCcIpLimitRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
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
        'DisableWebRuleCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SwitchWebRuleOriginResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableWebRuleCCResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SwitchWebRuleOriginResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SwitchWebRuleProtectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'CreateWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webRuleSpec' =>  [ 'shape' => 'WebRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'WebRule', ],
            ],
        ],
        'CreateWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWebRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SwitchWebRuleProtectResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'DescribeWebRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'EnableWebRuleCCResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWebRuleCCResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'ModifyWebRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'webRuleSpec' =>  [ 'shape' => 'WebRuleSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'webRuleId' => [ 'type' => 'string', 'locationName' => 'webRuleId', ],
            ],
        ],
        'DescribeWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeWebRuleResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteWebRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyWebRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeWebRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebRule', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
    ],
];
