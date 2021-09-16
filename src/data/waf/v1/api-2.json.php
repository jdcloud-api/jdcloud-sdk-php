<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'waf',
        'protocol' => 'json',
//        'serviceFullName' => 'waf',
//        'serviceId' => 'waf',
    ],
    'operations' => [
        'DescribeLbOutIp' => [
            'name' => 'DescribeLbOutIp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/admin:lboutIp',
            ],
            'input' => [ 'shape' => 'DescribeLbOutIpRequestShape', ],
            'output' => [ 'shape' => 'DescribeLbOutIpResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/billing:createInstance',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'GetAvailableCertForDomain' => [
            'name' => 'GetAvailableCertForDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/cert:availableForDomain',
            ],
            'input' => [ 'shape' => 'GetAvailableCertForDomainRequestShape', ],
            'output' => [ 'shape' => 'GetAvailableCertForDomainResponseShape', ],
        ],
        'BindCert' => [
            'name' => 'BindCert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/cert:bindCert',
            ],
            'input' => [ 'shape' => 'BindCertRequestShape', ],
            'output' => [ 'shape' => 'BindCertResponseShape', ],
        ],
        'GetBpsData' => [
            'name' => 'GetBpsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/chart:getBpsData',
            ],
            'input' => [ 'shape' => 'GetBpsDataRequestShape', ],
            'output' => [ 'shape' => 'GetBpsDataResponseShape', ],
        ],
        'GetQpsData' => [
            'name' => 'GetQpsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/chart:getQpsData',
            ],
            'input' => [ 'shape' => 'GetQpsDataRequestShape', ],
            'output' => [ 'shape' => 'GetQpsDataResponseShape', ],
        ],
        'GetEsLogDetail' => [
            'name' => 'GetEsLogDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/chart:getEsLog',
            ],
            'input' => [ 'shape' => 'GetEsLogDetailRequestShape', ],
            'output' => [ 'shape' => 'GetEsLogDetailResponseShape', ],
        ],
        'GetAntiEvent' => [
            'name' => 'GetAntiEvent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/chart:getAntiEvent',
            ],
            'input' => [ 'shape' => 'GetAntiEventRequestShape', ],
            'output' => [ 'shape' => 'GetAntiEventResponseShape', ],
        ],
        'GetDomainLbConfig' => [
            'name' => 'GetDomainLbConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:getDomainLbConfig',
            ],
            'input' => [ 'shape' => 'GetDomainLbConfigRequestShape', ],
            'output' => [ 'shape' => 'GetDomainLbConfigResponseShape', ],
        ],
        'AddDomain' => [
            'name' => 'AddDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:add',
            ],
            'input' => [ 'shape' => 'AddDomainRequestShape', ],
            'output' => [ 'shape' => 'AddDomainResponseShape', ],
        ],
        'UpdateDomain' => [
            'name' => 'UpdateDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:update',
            ],
            'input' => [ 'shape' => 'UpdateDomainRequestShape', ],
            'output' => [ 'shape' => 'UpdateDomainResponseShape', ],
        ],
        'DeleteDomain' => [
            'name' => 'DeleteDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:delete',
            ],
            'input' => [ 'shape' => 'DeleteDomainRequestShape', ],
            'output' => [ 'shape' => 'DeleteDomainResponseShape', ],
        ],
        'ListDomains' => [
            'name' => 'ListDomains',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:list',
            ],
            'input' => [ 'shape' => 'ListDomainsRequestShape', ],
            'output' => [ 'shape' => 'ListDomainsResponseShape', ],
        ],
        'GetDomainAntiConfig' => [
            'name' => 'GetDomainAntiConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:getAntiConfig',
            ],
            'input' => [ 'shape' => 'GetDomainAntiConfigRequestShape', ],
            'output' => [ 'shape' => 'GetDomainAntiConfigResponseShape', ],
        ],
        'ListMainCfg' => [
            'name' => 'ListMainCfg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:listMainCfg',
            ],
            'input' => [ 'shape' => 'ListMainCfgRequestShape', ],
            'output' => [ 'shape' => 'ListMainCfgResponseShape', ],
        ],
        'DisableRules' => [
            'name' => 'DisableRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:disableRules',
            ],
            'input' => [ 'shape' => 'DisableRulesRequestShape', ],
            'output' => [ 'shape' => 'DisableRulesResponseShape', ],
        ],
        'EnableWaf' => [
            'name' => 'EnableWaf',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:enable',
            ],
            'input' => [ 'shape' => 'EnableWafRequestShape', ],
            'output' => [ 'shape' => 'EnableWafResponseShape', ],
        ],
        'AntiModeWaf' => [
            'name' => 'AntiModeWaf',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:antiMode',
            ],
            'input' => [ 'shape' => 'AntiModeWafRequestShape', ],
            'output' => [ 'shape' => 'AntiModeWafResponseShape', ],
        ],
        'AntiLevelWaf' => [
            'name' => 'AntiLevelWaf',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:antiLevel',
            ],
            'input' => [ 'shape' => 'AntiLevelWafRequestShape', ],
            'output' => [ 'shape' => 'AntiLevelWafResponseShape', ],
        ],
        'EnableWafUserDefine' => [
            'name' => 'EnableWafUserDefine',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:setWafUserDefine',
            ],
            'input' => [ 'shape' => 'EnableWafUserDefineRequestShape', ],
            'output' => [ 'shape' => 'EnableWafUserDefineResponseShape', ],
        ],
        'SetWafRule' => [
            'name' => 'SetWafRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:setRule',
            ],
            'input' => [ 'shape' => 'SetWafRuleRequestShape', ],
            'output' => [ 'shape' => 'SetWafRuleResponseShape', ],
        ],
        'DelWafRule' => [
            'name' => 'DelWafRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:delRule',
            ],
            'input' => [ 'shape' => 'DelWafRuleRequestShape', ],
            'output' => [ 'shape' => 'DelWafRuleResponseShape', ],
        ],
        'ListWafRules' => [
            'name' => 'ListWafRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:listRules',
            ],
            'input' => [ 'shape' => 'ListWafRulesRequestShape', ],
            'output' => [ 'shape' => 'ListWafRulesResponseShape', ],
        ],
        'AddIps' => [
            'name' => 'AddIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/userdefine:addIps',
            ],
            'input' => [ 'shape' => 'AddIpsRequestShape', ],
            'output' => [ 'shape' => 'AddIpsResponseShape', ],
        ],
        'UpdateIps' => [
            'name' => 'UpdateIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/userdefine:updateIps',
            ],
            'input' => [ 'shape' => 'UpdateIpsRequestShape', ],
            'output' => [ 'shape' => 'UpdateIpsResponseShape', ],
        ],
        'ListIps' => [
            'name' => 'ListIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/userdefine:listIps',
            ],
            'input' => [ 'shape' => 'ListIpsRequestShape', ],
            'output' => [ 'shape' => 'ListIpsResponseShape', ],
        ],
        'DelIps' => [
            'name' => 'DelIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/userdefine:delIps',
            ],
            'input' => [ 'shape' => 'DelIpsRequestShape', ],
            'output' => [ 'shape' => 'DelIpsResponseShape', ],
        ],
        'SetWafCondition' => [
            'name' => 'SetWafCondition',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:setCondition',
            ],
            'input' => [ 'shape' => 'SetWafConditionRequestShape', ],
            'output' => [ 'shape' => 'SetWafConditionResponseShape', ],
        ],
        'DelWafCondition' => [
            'name' => 'DelWafCondition',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:delCondition',
            ],
            'input' => [ 'shape' => 'DelWafConditionRequestShape', ],
            'output' => [ 'shape' => 'DelWafConditionResponseShape', ],
        ],
        'ListWafConditions' => [
            'name' => 'ListWafConditions',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:listConditions',
            ],
            'input' => [ 'shape' => 'ListWafConditionsRequestShape', ],
            'output' => [ 'shape' => 'ListWafConditionsResponseShape', ],
        ],
        'ListWafFilter' => [
            'name' => 'ListWafFilter',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:listFilter',
            ],
            'input' => [ 'shape' => 'ListWafFilterRequestShape', ],
            'output' => [ 'shape' => 'ListWafFilterResponseShape', ],
        ],
        'EnableBot' => [
            'name' => 'EnableBot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:setBot',
            ],
            'input' => [ 'shape' => 'EnableBotRequestShape', ],
            'output' => [ 'shape' => 'EnableBotResponseShape', ],
        ],
        'EnableUsrBot' => [
            'name' => 'EnableUsrBot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:setUserDefineBot',
            ],
            'input' => [ 'shape' => 'EnableUsrBotRequestShape', ],
            'output' => [ 'shape' => 'EnableUsrBotResponseShape', ],
        ],
        'SetBotStdRules' => [
            'name' => 'SetBotStdRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:setStdRule',
            ],
            'input' => [ 'shape' => 'SetBotStdRulesRequestShape', ],
            'output' => [ 'shape' => 'SetBotStdRulesResponseShape', ],
        ],
        'ListBotStdRules' => [
            'name' => 'ListBotStdRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:listStdRule',
            ],
            'input' => [ 'shape' => 'ListBotStdRulesRequestShape', ],
            'output' => [ 'shape' => 'ListBotStdRulesResponseShape', ],
        ],
        'AddBotUsrRule' => [
            'name' => 'AddBotUsrRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:addUsrRule',
            ],
            'input' => [ 'shape' => 'AddBotUsrRuleRequestShape', ],
            'output' => [ 'shape' => 'AddBotUsrRuleResponseShape', ],
        ],
        'UpdateBotUsrRule' => [
            'name' => 'UpdateBotUsrRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:updateUsrRule',
            ],
            'input' => [ 'shape' => 'UpdateBotUsrRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdateBotUsrRuleResponseShape', ],
        ],
        'ListBotUsrRules' => [
            'name' => 'ListBotUsrRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:listUsrRule',
            ],
            'input' => [ 'shape' => 'ListBotUsrRulesRequestShape', ],
            'output' => [ 'shape' => 'ListBotUsrRulesResponseShape', ],
        ],
        'DelBotUsrRule' => [
            'name' => 'DelBotUsrRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:delUsrRule',
            ],
            'input' => [ 'shape' => 'DelBotUsrRuleRequestShape', ],
            'output' => [ 'shape' => 'DelBotUsrRuleResponseShape', ],
        ],
        'EnableBotThreatIp' => [
            'name' => 'EnableBotThreatIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:setThreatIpBot',
            ],
            'input' => [ 'shape' => 'EnableBotThreatIpRequestShape', ],
            'output' => [ 'shape' => 'EnableBotThreatIpResponseShape', ],
        ],
        'SetBotThreatIpRule' => [
            'name' => 'SetBotThreatIpRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:setThreatRule',
            ],
            'input' => [ 'shape' => 'SetBotThreatIpRuleRequestShape', ],
            'output' => [ 'shape' => 'SetBotThreatIpRuleResponseShape', ],
        ],
        'ListBotThreatIpRule' => [
            'name' => 'ListBotThreatIpRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:listThreatRule',
            ],
            'input' => [ 'shape' => 'ListBotThreatIpRuleRequestShape', ],
            'output' => [ 'shape' => 'ListBotThreatIpRuleResponseShape', ],
        ],
        'EnableRisk' => [
            'name' => 'EnableRisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:enable',
            ],
            'input' => [ 'shape' => 'EnableRiskRequestShape', ],
            'output' => [ 'shape' => 'EnableRiskResponseShape', ],
        ],
        'EnableRiskAccount' => [
            'name' => 'EnableRiskAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:enableAccount',
            ],
            'input' => [ 'shape' => 'EnableRiskAccountRequestShape', ],
            'output' => [ 'shape' => 'EnableRiskAccountResponseShape', ],
        ],
        'EnableRiskCtl' => [
            'name' => 'EnableRiskCtl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:enableRiskCtl',
            ],
            'input' => [ 'shape' => 'EnableRiskCtlRequestShape', ],
            'output' => [ 'shape' => 'EnableRiskCtlResponseShape', ],
        ],
        'SetRiskRule' => [
            'name' => 'SetRiskRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskRule',
            ],
            'input' => [ 'shape' => 'SetRiskRuleRequestShape', ],
            'output' => [ 'shape' => 'SetRiskRuleResponseShape', ],
        ],
        'ListRiskRules' => [
            'name' => 'ListRiskRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskRules',
            ],
            'input' => [ 'shape' => 'ListRiskRulesRequestShape', ],
            'output' => [ 'shape' => 'ListRiskRulesResponseShape', ],
        ],
        'DelRiskRule' => [
            'name' => 'DelRiskRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskRule',
            ],
            'input' => [ 'shape' => 'DelRiskRuleRequestShape', ],
            'output' => [ 'shape' => 'DelRiskRuleResponseShape', ],
        ],
        'SetRiskJs' => [
            'name' => 'SetRiskJs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskJs',
            ],
            'input' => [ 'shape' => 'SetRiskJsRequestShape', ],
            'output' => [ 'shape' => 'SetRiskJsResponseShape', ],
        ],
        'ListRiskJs' => [
            'name' => 'ListRiskJs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskJs',
            ],
            'input' => [ 'shape' => 'ListRiskJsRequestShape', ],
            'output' => [ 'shape' => 'ListRiskJsResponseShape', ],
        ],
        'DelRiskJs' => [
            'name' => 'DelRiskJs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskJs',
            ],
            'input' => [ 'shape' => 'DelRiskJsRequestShape', ],
            'output' => [ 'shape' => 'DelRiskJsResponseShape', ],
        ],
        'SetJsPage' => [
            'name' => 'SetJsPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/js:setPage',
            ],
            'input' => [ 'shape' => 'SetJsPageRequestShape', ],
            'output' => [ 'shape' => 'SetJsPageResponseShape', ],
        ],
        'DescribeJsPages' => [
            'name' => 'DescribeJsPages',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/js:listPage',
            ],
            'input' => [ 'shape' => 'DescribeJsPagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeJsPagesResponseShape', ],
        ],
        'DelJsPage' => [
            'name' => 'DelJsPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/js:delPage',
            ],
            'input' => [ 'shape' => 'DelJsPageRequestShape', ],
            'output' => [ 'shape' => 'DelJsPageResponseShape', ],
        ],
        'ListRiskConfDefault' => [
            'name' => 'ListRiskConfDefault',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskConfDefault',
            ],
            'input' => [ 'shape' => 'ListRiskConfDefaultRequestShape', ],
            'output' => [ 'shape' => 'ListRiskConfDefaultResponseShape', ],
        ],
        'SetRiskEvent' => [
            'name' => 'SetRiskEvent',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskEvent',
            ],
            'input' => [ 'shape' => 'SetRiskEventRequestShape', ],
            'output' => [ 'shape' => 'SetRiskEventResponseShape', ],
        ],
        'ListRiskEvents' => [
            'name' => 'ListRiskEvents',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskEvents',
            ],
            'input' => [ 'shape' => 'ListRiskEventsRequestShape', ],
            'output' => [ 'shape' => 'ListRiskEventsResponseShape', ],
        ],
        'DelRiskEvents' => [
            'name' => 'DelRiskEvents',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskEvents',
            ],
            'input' => [ 'shape' => 'DelRiskEventsRequestShape', ],
            'output' => [ 'shape' => 'DelRiskEventsResponseShape', ],
        ],
        'SetRiskPolicy' => [
            'name' => 'SetRiskPolicy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskPolicy',
            ],
            'input' => [ 'shape' => 'SetRiskPolicyRequestShape', ],
            'output' => [ 'shape' => 'SetRiskPolicyResponseShape', ],
        ],
        'ListRiskPolicys' => [
            'name' => 'ListRiskPolicys',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskPolicys',
            ],
            'input' => [ 'shape' => 'ListRiskPolicysRequestShape', ],
            'output' => [ 'shape' => 'ListRiskPolicysResponseShape', ],
        ],
        'DelRiskPolicys' => [
            'name' => 'DelRiskPolicys',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskPolicys',
            ],
            'input' => [ 'shape' => 'DelRiskPolicysRequestShape', ],
            'output' => [ 'shape' => 'DelRiskPolicysResponseShape', ],
        ],
        'SetRiskUsrList' => [
            'name' => 'SetRiskUsrList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskUsrList',
            ],
            'input' => [ 'shape' => 'SetRiskUsrListRequestShape', ],
            'output' => [ 'shape' => 'SetRiskUsrListResponseShape', ],
        ],
        'ListRiskUsrLists' => [
            'name' => 'ListRiskUsrLists',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskUsrLists',
            ],
            'input' => [ 'shape' => 'ListRiskUsrListsRequestShape', ],
            'output' => [ 'shape' => 'ListRiskUsrListsResponseShape', ],
        ],
        'DelRiskUsrLists' => [
            'name' => 'DelRiskUsrLists',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskUsrLists',
            ],
            'input' => [ 'shape' => 'DelRiskUsrListsRequestShape', ],
            'output' => [ 'shape' => 'DelRiskUsrListsResponseShape', ],
        ],
        'SetRiskVar' => [
            'name' => 'SetRiskVar',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskVar',
            ],
            'input' => [ 'shape' => 'SetRiskVarRequestShape', ],
            'output' => [ 'shape' => 'SetRiskVarResponseShape', ],
        ],
        'ListRiskVars' => [
            'name' => 'ListRiskVars',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskVars',
            ],
            'input' => [ 'shape' => 'ListRiskVarsRequestShape', ],
            'output' => [ 'shape' => 'ListRiskVarsResponseShape', ],
        ],
        'DelRiskVars' => [
            'name' => 'DelRiskVars',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskVars',
            ],
            'input' => [ 'shape' => 'DelRiskVarsRequestShape', ],
            'output' => [ 'shape' => 'DelRiskVarsResponseShape', ],
        ],
        'ListRiskEventVars' => [
            'name' => 'ListRiskEventVars',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskEventVars',
            ],
            'input' => [ 'shape' => 'ListRiskEventVarsRequestShape', ],
            'output' => [ 'shape' => 'ListRiskEventVarsResponseShape', ],
        ],
        'DelRiskEventVars' => [
            'name' => 'DelRiskEventVars',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskEventVars',
            ],
            'input' => [ 'shape' => 'DelRiskEventVarsRequestShape', ],
            'output' => [ 'shape' => 'DelRiskEventVarsResponseShape', ],
        ],
        'SetRiskEventVars' => [
            'name' => 'SetRiskEventVars',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskEventVars',
            ],
            'input' => [ 'shape' => 'SetRiskEventVarsRequestShape', ],
            'output' => [ 'shape' => 'SetRiskEventVarsResponseShape', ],
        ],
        'GetWafInstance' => [
            'name' => 'GetWafInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/user:getWafInstance',
            ],
            'input' => [ 'shape' => 'GetWafInstanceRequestShape', ],
            'output' => [ 'shape' => 'GetWafInstanceResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
