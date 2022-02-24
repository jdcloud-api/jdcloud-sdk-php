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
        'UpgradeInstance' => [
            'name' => 'UpgradeInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/billing:upgradeInstance',
            ],
            'input' => [ 'shape' => 'UpgradeInstanceRequestShape', ],
            'output' => [ 'shape' => 'UpgradeInstanceResponseShape', ],
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
        'GetStatusCodeInfo' => [
            'name' => 'GetStatusCodeInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/chart:getStatusCodeInfo',
            ],
            'input' => [ 'shape' => 'GetStatusCodeInfoRequestShape', ],
            'output' => [ 'shape' => 'GetStatusCodeInfoResponseShape', ],
        ],
        'GetMainAntiInfoNew' => [
            'name' => 'GetMainAntiInfoNew',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/chart:getMainAntiInfoNew',
            ],
            'input' => [ 'shape' => 'GetMainAntiInfoNewRequestShape', ],
            'output' => [ 'shape' => 'GetMainAntiInfoNewResponseShape', ],
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
        'EnableCname2RsExternal' => [
            'name' => 'EnableCname2RsExternal',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:enableCname2RsExternal',
            ],
            'input' => [ 'shape' => 'EnableCname2RsExternalRequestShape', ],
            'output' => [ 'shape' => 'EnableCname2RsExternalResponseShape', ],
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
        'ListBotStdRules' => [
            'name' => 'ListBotStdRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:listStdRule',
            ],
            'input' => [ 'shape' => 'ListBotStdRulesRequestShape', ],
            'output' => [ 'shape' => 'ListBotStdRulesResponseShape', ],
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
        'GetPriceReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'extraDomainsNum' => [ 'type' => 'integer', 'locationName' => 'extraDomainsNum', ],
                'extraBitsLimit' => [ 'type' => 'integer', 'locationName' => 'extraBitsLimit', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'OrderReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'extraDomainsNum' => [ 'type' => 'integer', 'locationName' => 'extraDomainsNum', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'returnURL' => [ 'type' => 'string', 'locationName' => 'returnURL', ],
                'extraBitsLimit' => [ 'type' => 'integer', 'locationName' => 'extraBitsLimit', ],
                'appCode' => [ 'type' => 'string', 'locationName' => 'appCode', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'AssignCertReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'isGm' => [ 'type' => 'integer', 'locationName' => 'isGm', ],
            ],
        ],
        'GetAvailableCertReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'isGm' => [ 'type' => 'integer', 'locationName' => 'isGm', ],
            ],
        ],
        'ChartItemValue' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'EsLogFile' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'GetEsLogUrlReq' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'TopValue' => [
            'type' => 'structure',
            'members' => [
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'src' => [ 'type' => 'string', 'locationName' => 'src', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
            ],
        ],
        'TopAntiValue' => [
            'type' => 'structure',
            'members' => [
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'src' => [ 'type' => 'string', 'locationName' => 'src', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
                'count' => [ 'type' => 'list', 'member' => [ 'shape' => 'KVPair', ], ],
            ],
        ],
        'GetUserPinVipInfoReq' => [
            'type' => 'structure',
            'members' => [
                'userPins' => [ 'type' => 'string', 'locationName' => 'userPins', ],
            ],
        ],
        'AclTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'rulename_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'StatusCodeData' => [
            'type' => 'structure',
            'members' => [
                'domainTop10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopCodeValue', ], ],
                'urlTop10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopCodeValue', ], ],
                'statusCodeTotal' =>  [ 'shape' => 'ChartItemValue', ],
                'statusCodePie' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'GetStatusCodeReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'statusCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'isStaCode' => [ 'type' => 'boolean', 'locationName' => 'isStaCode', ],
            ],
        ],
        'CcTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'BotTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'Abnormal' => [
            'type' => 'structure',
            'members' => [
                'noResp' =>  [ 'shape' => 'ChartItemValue', ],
                's503' =>  [ 'shape' => 'ChartItemValue', ],
                's404' =>  [ 'shape' => 'ChartItemValue', ],
                's502' =>  [ 'shape' => 'ChartItemValue', ],
                's504' =>  [ 'shape' => 'ChartItemValue', ],
                's5XX' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'Qps' => [
            'type' => 'structure',
            'members' => [
                'qpsTotal' =>  [ 'shape' => 'ChartItemValue', ],
                'wafAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'ccAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'aclAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'cacheTotal' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'LogReportReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'accessTime' => [ 'type' => 'integer', 'locationName' => 'accessTime', ],
            ],
        ],
        'TopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' =>  [ 'shape' => 'TopValue', ],
                'area_top10' =>  [ 'shape' => 'TopValue', ],
                'url_top10' =>  [ 'shape' => 'TopValue', ],
                'ua_top10' =>  [ 'shape' => 'TopValue', ],
                'domain_anti_top10' =>  [ 'shape' => 'TopAntiValue', ],
                'url_anti_top10' =>  [ 'shape' => 'TopAntiValue', ],
            ],
        ],
        'ListEsLogDownloadReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'EsLogEvent' => [
            'type' => 'structure',
            'members' => [
                'accessTime' => [ 'type' => 'integer', 'locationName' => 'accessTime', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'remotePort' => [ 'type' => 'string', 'locationName' => 'remotePort', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'payLoad' => [ 'type' => 'string', 'locationName' => 'payLoad', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'upstreamErr' => [ 'type' => 'string', 'locationName' => 'upstreamErr', ],
                'timeLocal' => [ 'type' => 'string', 'locationName' => 'timeLocal', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'bytesSent' => [ 'type' => 'string', 'locationName' => 'bytesSent', ],
                'requestLength' => [ 'type' => 'string', 'locationName' => 'requestLength', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'serverAddr' => [ 'type' => 'string', 'locationName' => 'serverAddr', ],
                'serverPort' => [ 'type' => 'string', 'locationName' => 'serverPort', ],
                'upstreamHttpName' => [ 'type' => 'string', 'locationName' => 'upstreamHttpName', ],
                'upstreamAddr' => [ 'type' => 'string', 'locationName' => 'upstreamAddr', ],
                'upstreamHttpPort' => [ 'type' => 'string', 'locationName' => 'upstreamHttpPort', ],
                'upstreamConnectTime' => [ 'type' => 'string', 'locationName' => 'upstreamConnectTime', ],
                'upstreamHeaderTime' => [ 'type' => 'string', 'locationName' => 'upstreamHeaderTime', ],
                'upstreamResponseTime' => [ 'type' => 'string', 'locationName' => 'upstreamResponseTime', ],
                'requestTime' => [ 'type' => 'string', 'locationName' => 'requestTime', ],
                'httpUserAgent' => [ 'type' => 'string', 'locationName' => 'httpUserAgent', ],
                'antiReason' => [ 'type' => 'string', 'locationName' => 'antiReason', ],
                'httpReferer' => [ 'type' => 'string', 'locationName' => 'httpReferer', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'sentHttpContentRange' => [ 'type' => 'string', 'locationName' => 'sentHttpContentRange', ],
                'antiRemoteAddr' => [ 'type' => 'string', 'locationName' => 'antiRemoteAddr', ],
                'antiStatus' => [ 'type' => 'string', 'locationName' => 'antiStatus', ],
                'antiReqRaw' => [ 'type' => 'string', 'locationName' => 'antiReqRaw', ],
                'antiRespRaw' => [ 'type' => 'string', 'locationName' => 'antiRespRaw', ],
                'antiGeo' => [ 'type' => 'string', 'locationName' => 'antiGeo', ],
                'antiRiskFid' => [ 'type' => 'string', 'locationName' => 'antiRiskFid', ],
                'antiRiskRaw' => [ 'type' => 'string', 'locationName' => 'antiRiskRaw', ],
            ],
        ],
        'TopCodeValue' => [
            'type' => 'structure',
            'members' => [
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'src' => [ 'type' => 'string', 'locationName' => 'src', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
                'status_code' => [ 'type' => 'list', 'member' => [ 'shape' => 'KVPair', ], ],
            ],
        ],
        'UserPin2Ips' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserPinIpInfo', ], ],
            ],
        ],
        'GetChartReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'isSum' => [ 'type' => 'boolean', 'locationName' => 'isSum', ],
                'isWafRule' => [ 'type' => 'boolean', 'locationName' => 'isWafRule', ],
                'isRs' => [ 'type' => 'boolean', 'locationName' => 'isRs', ],
                'pieItem' => [ 'type' => 'string', 'locationName' => 'pieItem', ],
                'statusCode' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'isStaCode' => [ 'type' => 'boolean', 'locationName' => 'isStaCode', ],
            ],
        ],
        'GetAntiEventReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'antiType' => [ 'type' => 'string', 'locationName' => 'antiType', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'antiStatus' => [ 'type' => 'string', 'locationName' => 'antiStatus', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'sortKey' => [ 'type' => 'string', 'locationName' => 'sortKey', ],
                'sortDesc' => [ 'type' => 'string', 'locationName' => 'sortDesc', ],
                'isExport' => [ 'type' => 'boolean', 'locationName' => 'isExport', ],
            ],
        ],
        'UserPinIpInfo' => [
            'type' => 'structure',
            'members' => [
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'Bps' => [
            'type' => 'structure',
            'members' => [
                'upBps' =>  [ 'shape' => 'ChartItemValue', ],
                'downBps' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'WafTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'area_top50' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'waf_rule_sum' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'GetEsLogReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'logType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'GetWafDataReq' => [
            'type' => 'structure',
            'members' => [
                'userPin' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'long', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'long', 'locationName' => 'endTime', ],
            ],
        ],
        'KVPair' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'AntiEvent' => [
            'type' => 'structure',
            'members' => [
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'csaInfo' => [ 'type' => 'string', 'locationName' => 'csaInfo', ],
                'riskLevel' => [ 'type' => 'string', 'locationName' => 'riskLevel', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'accessTime' => [ 'type' => 'integer', 'locationName' => 'accessTime', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'attackType' => [ 'type' => 'string', 'locationName' => 'attackType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'payLoad' => [ 'type' => 'string', 'locationName' => 'payLoad', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'isReported' => [ 'type' => 'integer', 'locationName' => 'isReported', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'antiStatus' => [ 'type' => 'string', 'locationName' => 'antiStatus', ],
                'upstreamErr' => [ 'type' => 'string', 'locationName' => 'upstreamErr', ],
                'skipExist' => [ 'type' => 'integer', 'locationName' => 'skipExist', ],
                'denyExist' => [ 'type' => 'integer', 'locationName' => 'denyExist', ],
            ],
        ],
        'UserDefPageConf' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
            ],
        ],
        'AddDomain' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sslProtocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'lbType' => [ 'type' => 'string', 'locationName' => 'lbType', ],
                'rsConfig' =>  [ 'shape' => 'RsConfig', ],
                'pureClient' => [ 'type' => 'integer', 'locationName' => 'pureClient', ],
                'httpsRedirect' => [ 'type' => 'integer', 'locationName' => 'httpsRedirect', ],
                'rsOnlySupportHttp' => [ 'type' => 'integer', 'locationName' => 'rsOnlySupportHttp', ],
                'gmCertSupport' => [ 'type' => 'integer', 'locationName' => 'gmCertSupport', ],
                'httpVersion' => [ 'type' => 'string', 'locationName' => 'httpVersion', ],
                'enableKeepalive' => [ 'type' => 'integer', 'locationName' => 'enableKeepalive', ],
                'suiteLevel' => [ 'type' => 'integer', 'locationName' => 'suiteLevel', ],
                'userSuiteLevel' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enableUnderscores' => [ 'type' => 'integer', 'locationName' => 'enableUnderscores', ],
                'disableHealthCheck' => [ 'type' => 'integer', 'locationName' => 'disableHealthCheck', ],
                'proxyConnectTimeout' => [ 'type' => 'integer', 'locationName' => 'proxyConnectTimeout', ],
            ],
        ],
        'DomainRegionInfo' => [
            'type' => 'structure',
            'members' => [
                'hb_bgp' =>  [ 'shape' => 'RegionVipInfo', ],
                'hd_bgp' =>  [ 'shape' => 'RegionVipInfo', ],
                'hn' =>  [ 'shape' => 'RegionVipInfo', ],
            ],
        ],
        'SetDomainRegionReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'isGm' => [ 'type' => 'integer', 'locationName' => 'isGm', ],
            ],
        ],
        'RsConfig' => [
            'type' => 'structure',
            'members' => [
                'rsAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'weight' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'httpRsPort' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'httpsRsPort' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'rsType' => [ 'type' => 'integer', 'locationName' => 'rsType', ],
            ],
        ],
        'BotConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'enableUserDefine' => [ 'type' => 'integer', 'locationName' => 'enableUserDefine', ],
                'enableThreatIp' => [ 'type' => 'integer', 'locationName' => 'enableThreatIp', ],
            ],
        ],
        'DenyActionCfg' => [
            'type' => 'structure',
            'members' => [
                'atOp' => [ 'type' => 'integer', 'locationName' => 'atOp', ],
                'atVal' => [ 'type' => 'string', 'locationName' => 'atVal', ],
            ],
        ],
        'RegionVipInfo' => [
            'type' => 'structure',
            'members' => [
                'chosen' => [ 'type' => 'boolean', 'locationName' => 'chosen', ],
                'vips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ActiveFuncReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'isGm' => [ 'type' => 'integer', 'locationName' => 'isGm', ],
            ],
        ],
        'AccessWafStatus' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statusCode' => [ 'type' => 'integer', 'locationName' => 'statusCode', ],
                'statusMsg' => [ 'type' => 'string', 'locationName' => 'statusMsg', ],
            ],
        ],
        'UserPolicyWafDomain' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'FilterSenseConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'respCodeNum' => [ 'type' => 'integer', 'locationName' => 'respCodeNum', ],
                'senseinfoNum' => [ 'type' => 'integer', 'locationName' => 'senseinfoNum', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'UserPolicyIdInfo' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'DomainMainConfig' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sslProtocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pureClient' => [ 'type' => 'integer', 'locationName' => 'pureClient', ],
                'httpStatus' => [ 'type' => 'integer', 'locationName' => 'httpStatus', ],
                'httpsCertUpdateStatus' => [ 'type' => 'integer', 'locationName' => 'httpsCertUpdateStatus', ],
                'gmHttpsCertUpdateStatus' => [ 'type' => 'integer', 'locationName' => 'gmHttpsCertUpdateStatus', ],
                'gmCertSupport' => [ 'type' => 'integer', 'locationName' => 'gmCertSupport', ],
                'antiStatus' =>  [ 'shape' => 'AntiStatus', ],
                'disableWaf' => [ 'type' => 'integer', 'locationName' => 'disableWaf', ],
                'attackInfo' =>  [ 'shape' => 'AttackInfo', ],
                'dnsStatus' =>  [ 'shape' => 'DnsStatus', ],
                'enableCname2Rs' => [ 'type' => 'integer', 'locationName' => 'enableCname2Rs', ],
                'enableIpv6' => [ 'type' => 'integer', 'locationName' => 'enableIpv6', ],
                'region' =>  [ 'shape' => 'DomainRegionInfo', ],
            ],
        ],
        'RiskConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'enableAccount' => [ 'type' => 'integer', 'locationName' => 'enableAccount', ],
            ],
        ],
        'AclConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'aclRuleNum' => [ 'type' => 'integer', 'locationName' => 'aclRuleNum', ],
            ],
        ],
        'WafConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'wafMode' => [ 'type' => 'integer', 'locationName' => 'wafMode', ],
                'wafLevel' => [ 'type' => 'integer', 'locationName' => 'wafLevel', ],
                'usrPolicy' => [ 'type' => 'long', 'locationName' => 'usrPolicy', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'FilterHeaderConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'reqEnable' => [ 'type' => 'integer', 'locationName' => 'reqEnable', ],
                'respEnable' => [ 'type' => 'integer', 'locationName' => 'respEnable', ],
                'reqHeaderNum' => [ 'type' => 'integer', 'locationName' => 'reqHeaderNum', ],
                'respHeaderNum' => [ 'type' => 'integer', 'locationName' => 'respHeaderNum', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'LastAttackReport' => [
            'type' => 'structure',
            'members' => [
                'lastAttackTime' => [ 'type' => 'integer', 'locationName' => 'lastAttackTime', ],
                'attackCount' => [ 'type' => 'integer', 'locationName' => 'attackCount', ],
            ],
        ],
        'SignatureRuleReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'ruleLevel' => [ 'type' => 'integer', 'locationName' => 'ruleLevel', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'cve' => [ 'type' => 'string', 'locationName' => 'cve', ],
                'ruleId' => [ 'type' => 'integer', 'locationName' => 'ruleId', ],
                'orderTime' => [ 'type' => 'string', 'locationName' => 'orderTime', ],
            ],
        ],
        'DenyConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'listNum' => [ 'type' => 'integer', 'locationName' => 'listNum', ],
            ],
        ],
        'DisableRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'SkipConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'listNum' => [ 'type' => 'integer', 'locationName' => 'listNum', ],
            ],
        ],
        'LbConfig' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'lbConf' =>  [ 'shape' => 'LbConf', ],
            ],
        ],
        'ActiveFuncByRegionReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'RatelimitConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'rateLimitNum' => [ 'type' => 'integer', 'locationName' => 'rateLimitNum', ],
            ],
        ],
        'UriRewriteConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'uriRewriteNum' => [ 'type' => 'integer', 'locationName' => 'uriRewriteNum', ],
            ],
        ],
        'WebUserdefConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'conditionNum' => [ 'type' => 'integer', 'locationName' => 'conditionNum', ],
                'ruleNum' => [ 'type' => 'integer', 'locationName' => 'ruleNum', ],
            ],
        ],
        'SignatureRules' => [
            'type' => 'structure',
            'members' => [
                'ruleId' => [ 'type' => 'long', 'locationName' => 'ruleId', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'ruleLevel' => [ 'type' => 'integer', 'locationName' => 'ruleLevel', ],
                'cve' => [ 'type' => 'string', 'locationName' => 'cve', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'ruleDesc' => [ 'type' => 'string', 'locationName' => 'ruleDesc', ],
            ],
        ],
        'AntiStatus' => [
            'type' => 'structure',
            'members' => [
                'acl' => [ 'type' => 'integer', 'locationName' => 'acl', ],
                'cc' => [ 'type' => 'integer', 'locationName' => 'cc', ],
                'waf' => [ 'type' => 'integer', 'locationName' => 'waf', ],
            ],
        ],
        'DomainActive' => [
            'type' => 'structure',
            'members' => [
                'active' => [ 'type' => 'integer', 'locationName' => 'active', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'AttackInfo' => [
            'type' => 'structure',
            'members' => [
                'aclAnti' => [ 'type' => 'long', 'locationName' => 'aclAnti', ],
                'ccAnti' => [ 'type' => 'long', 'locationName' => 'ccAnti', ],
                'wafAnti' => [ 'type' => 'long', 'locationName' => 'wafAnti', ],
            ],
        ],
        'DnsStatus' => [
            'type' => 'structure',
            'members' => [
                'statusCode' => [ 'type' => 'integer', 'locationName' => 'statusCode', ],
                'statusMsg' => [ 'type' => 'string', 'locationName' => 'statusMsg', ],
            ],
        ],
        'IntSemConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
            ],
        ],
        'IpbanConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'banTime' => [ 'type' => 'integer', 'locationName' => 'banTime', ],
                'detectTime' => [ 'type' => 'integer', 'locationName' => 'detectTime', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
            ],
        ],
        'UserPolicyInfo' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'domainCnt' => [ 'type' => 'integer', 'locationName' => 'domainCnt', ],
                'autoAdd' => [ 'type' => 'integer', 'locationName' => 'autoAdd', ],
                'importLevel' => [ 'type' => 'integer', 'locationName' => 'importLevel', ],
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'wafDomains' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserPolicyWafDomain', ], ],
            ],
        ],
        'StatusConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'statusNum' => [ 'type' => 'integer', 'locationName' => 'statusNum', ],
            ],
        ],
        'ListDomains' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'CommonReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'AccessWafStatusReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'CcConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'ccMode' => [ 'type' => 'integer', 'locationName' => 'ccMode', ],
                'qps' => [ 'type' => 'integer', 'locationName' => 'qps', ],
                'enableUserDefine' => [ 'type' => 'integer', 'locationName' => 'enableUserDefine', ],
                'rulesCount' => [ 'type' => 'integer', 'locationName' => 'rulesCount', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
            ],
        ],
        'SignatureRuleGroup' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'UserPolicySetReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'autoAdd' => [ 'type' => 'integer', 'locationName' => 'autoAdd', ],
                'importLevel' => [ 'type' => 'integer', 'locationName' => 'importLevel', ],
                'ruleIds' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'UserPolicyName' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DomainConfig' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'lbConf' =>  [ 'shape' => 'LbConf', ],
                'dnsStatus' =>  [ 'shape' => 'DnsStatus', ],
                'wafConf' =>  [ 'shape' => 'WafConf', ],
                'ccConf' =>  [ 'shape' => 'CcConf', ],
                'aclConf' =>  [ 'shape' => 'AclConf', ],
                'ipbanConf' =>  [ 'shape' => 'IpbanConf', ],
                'lastAttackReport' =>  [ 'shape' => 'LastAttackReport', ],
                'antispiderConf' =>  [ 'shape' => 'EnableConf', ],
                'webcacheConf' =>  [ 'shape' => 'EnableConf', ],
                'disableWaf' => [ 'type' => 'integer', 'locationName' => 'disableWaf', ],
                'skipConf' =>  [ 'shape' => 'SkipConf', ],
                'denyConf' =>  [ 'shape' => 'DenyConf', ],
                'webUserdefConf' =>  [ 'shape' => 'WebUserdefConf', ],
                'ratelimitConf' =>  [ 'shape' => 'RatelimitConf', ],
                'userDefPageConf' =>  [ 'shape' => 'UserDefPageConf', ],
                'filterHeaderConf' =>  [ 'shape' => 'FilterHeaderConf', ],
                'filterSenseConf' =>  [ 'shape' => 'FilterSenseConf', ],
                'intSemConf' =>  [ 'shape' => 'IntSemConf', ],
                'uriRewriteConf' =>  [ 'shape' => 'UriRewriteConf', ],
                'threatinfoConf' =>  [ 'shape' => 'EnableConf', ],
                'proxycacheConf' =>  [ 'shape' => 'EnableConf', ],
                'botConf' =>  [ 'shape' => 'EnableConf', ],
                'riskConf' =>  [ 'shape' => 'RiskConf', ],
            ],
        ],
        'UserPolicyReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'SetUserPolicyDomainsReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainActive', ], ],
            ],
        ],
        'LbConf' => [
            'type' => 'structure',
            'members' => [
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sslProtocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'lbType' => [ 'type' => 'string', 'locationName' => 'lbType', ],
                'rsConfig' =>  [ 'shape' => 'RsConfig', ],
                'pureClient' => [ 'type' => 'integer', 'locationName' => 'pureClient', ],
                'httpsRedirect' => [ 'type' => 'integer', 'locationName' => 'httpsRedirect', ],
                'rsOnlySupportHttp' => [ 'type' => 'integer', 'locationName' => 'rsOnlySupportHttp', ],
                'httpsCertUpdateStatus' => [ 'type' => 'integer', 'locationName' => 'httpsCertUpdateStatus', ],
                'gmHttpsCertUpdateStatus' => [ 'type' => 'integer', 'locationName' => 'gmHttpsCertUpdateStatus', ],
                'gmCertSupport' => [ 'type' => 'integer', 'locationName' => 'gmCertSupport', ],
                'httpStatus' => [ 'type' => 'integer', 'locationName' => 'httpStatus', ],
                'httpVersion' => [ 'type' => 'string', 'locationName' => 'httpVersion', ],
                'enableKeepalive' => [ 'type' => 'integer', 'locationName' => 'enableKeepalive', ],
                'suiteLevel' => [ 'type' => 'integer', 'locationName' => 'suiteLevel', ],
                'userSuiteLevel' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'enableUnderscores' => [ 'type' => 'integer', 'locationName' => 'enableUnderscores', ],
                'maxBodySize' => [ 'type' => 'string', 'locationName' => 'maxBodySize', ],
                'disableHealthCheck' => [ 'type' => 'integer', 'locationName' => 'disableHealthCheck', ],
                'proxyConnectTimeout' => [ 'type' => 'integer', 'locationName' => 'proxyConnectTimeout', ],
            ],
        ],
        'EnableConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'DomainInfo' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'rsAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dnsType' => [ 'type' => 'string', 'locationName' => 'dnsType', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
            ],
        ],
        'IpVipInfo' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'isVip' => [ 'type' => 'boolean', 'locationName' => 'isVip', ],
            ],
        ],
        'IpDomainInfo' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'isVip' => [ 'type' => 'boolean', 'locationName' => 'isVip', ],
                'domainInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainInfo', ], ],
            ],
        ],
        'ListNoticeReq' => [
            'type' => 'structure',
            'members' => [
                'noticeType' => [ 'type' => 'integer', 'locationName' => 'noticeType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'IdReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'NoticeConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'noticeType' => [ 'type' => 'integer', 'locationName' => 'noticeType', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'docType' => [ 'type' => 'integer', 'locationName' => 'docType', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetWafUserDefineReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enableUserDef' => [ 'type' => 'integer', 'locationName' => 'enableUserDef', ],
            ],
        ],
        'ListRiskConfDefaultReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'IpListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'SetWebcacheUrlReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'website' => [ 'type' => 'integer', 'locationName' => 'website', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'RiskConfDefaultCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListRiskRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'sceneRef' => [ 'type' => 'string', 'locationName' => 'sceneRef', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'RiskEventVarsCfg' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'event' =>  [ 'shape' => 'RiskEventCfg', ],
                'vars' =>  [ 'shape' => 'RiskVarCfg', ],
                'policys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RiskPolicyCfg', ], ],
            ],
        ],
        'GeoCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'ConditionIdSet' => [
            'type' => 'structure',
            'members' => [
                'conditionId' => [ 'type' => 'integer', 'locationName' => 'conditionId', ],
                'opposite' => [ 'type' => 'string', 'locationName' => 'opposite', ],
            ],
        ],
        'BotMatchItem' => [
            'type' => 'structure',
            'members' => [
                'field' => [ 'type' => 'string', 'locationName' => 'field', ],
                'logic' => [ 'type' => 'integer', 'locationName' => 'logic', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'SetProxycacheConfigReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'itemCfg' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheItemCfg', ], ],
            ],
        ],
        'RiskPolicyCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'eventCode' => [ 'type' => 'string', 'locationName' => 'eventCode', ],
                'logic' => [ 'type' => 'string', 'locationName' => 'logic', ],
                'rules' => [ 'type' => 'string', 'locationName' => 'rules', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'AntiModeWafReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'wafMode' => [ 'type' => 'integer', 'locationName' => 'wafMode', ],
            ],
        ],
        'KeyValCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'RiskUsrListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ListBotStdRuleReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'botType' => [ 'type' => 'string', 'locationName' => 'botType', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'RiskVarRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'left' => [ 'type' => 'string', 'locationName' => 'left', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'right' => [ 'type' => 'string', 'locationName' => 'right', ],
                'resultOpt' => [ 'type' => 'string', 'locationName' => 'resultOpt', ],
                'resultRight' => [ 'type' => 'string', 'locationName' => 'resultRight', ],
            ],
        ],
        'FilterSenseinfoListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchLogic' => [ 'type' => 'string', 'locationName' => 'matchLogic', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'matchVal' => [ 'type' => 'string', 'locationName' => 'matchVal', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'SetRiskJsReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
            ],
        ],
        'SetProxycacheUrlReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'proto' => [ 'type' => 'string', 'locationName' => 'proto', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
            ],
        ],
        'Proxycacheitem' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'SkipActionCfg' => [
            'type' => 'structure',
            'members' => [
                'passAll' => [ 'type' => 'integer', 'locationName' => 'passAll', ],
                'cc' => [ 'type' => 'integer', 'locationName' => 'cc', ],
                'waf' => [ 'type' => 'integer', 'locationName' => 'waf', ],
                'deny' => [ 'type' => 'integer', 'locationName' => 'deny', ],
                'rateLimit' => [ 'type' => 'integer', 'locationName' => 'rateLimit', ],
                'bot' => [ 'type' => 'integer', 'locationName' => 'bot', ],
                'risk' => [ 'type' => 'integer', 'locationName' => 'risk', ],
            ],
        ],
        'ListRiskCommonReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'rulesFilter' => [ 'type' => 'string', 'locationName' => 'rulesFilter', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ListWafFilterReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'conditionId' => [ 'type' => 'integer', 'locationName' => 'conditionId', ],
            ],
        ],
        'CommonNameReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ListRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'ListBotFakeSpiderRuleReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'FilterCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'partOfReq' => [ 'type' => 'string', 'locationName' => 'partOfReq', ],
                'reqKey' => [ 'type' => 'string', 'locationName' => 'reqKey', ],
                'matchLogic' => [ 'type' => 'string', 'locationName' => 'matchLogic', ],
                'reqValue' => [ 'type' => 'string', 'locationName' => 'reqValue', ],
                'decodeFunc' => [ 'type' => 'string', 'locationName' => 'decodeFunc', ],
                'isBase64Decode' => [ 'type' => 'string', 'locationName' => 'isBase64Decode', ],
            ],
        ],
        'SetCookieReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'cookies' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValCfg', ], ],
            ],
        ],
        'PageListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'checkStatus' => [ 'type' => 'integer', 'locationName' => 'checkStatus', ],
            ],
        ],
        'SetRewriteRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'rewriteType' => [ 'type' => 'string', 'locationName' => 'rewriteType', ],
                'rewriteRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RewriteRuleCfg', ], ],
            ],
        ],
        'StatusListCfg' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'oriStatus' => [ 'type' => 'string', 'locationName' => 'oriStatus', ],
                'setStatus' => [ 'type' => 'string', 'locationName' => 'setStatus', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'SetFilterSenseinfoReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchLogic' => [ 'type' => 'string', 'locationName' => 'matchLogic', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'matchVal' => [ 'type' => 'string', 'locationName' => 'matchVal', ],
            ],
        ],
        'CommonDenySkipReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
            ],
        ],
        'SetRiskEventVarsReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'event' =>  [ 'shape' => 'RiskEventCfg', ],
                'vars' => [ 'type' => 'list', 'member' => [ 'shape' => 'RiskVarCfg', ], ],
                'policys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RiskPolicyCfg', ], ],
            ],
        ],
        'SetRatelimitRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RateLimitRuleCfg', ], ],
            ],
        ],
        'ListWafRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConditionNameSet', ], ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'ListRiskJsReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'SetRiskVarReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'eventCode' => [ 'type' => 'string', 'locationName' => 'eventCode', ],
                'varType' => [ 'type' => 'string', 'locationName' => 'varType', ],
                'cost' => [ 'type' => 'string', 'locationName' => 'cost', ],
                'output' => [ 'type' => 'string', 'locationName' => 'output', ],
                'property' => [ 'type' => 'string', 'locationName' => 'property', ],
                'dura' => [ 'type' => 'string', 'locationName' => 'dura', ],
                'logic' => [ 'type' => 'string', 'locationName' => 'logic', ],
                'rules' =>  [ 'shape' => 'RiskVarRuleCfg', ],
                'pos' => [ 'type' => 'string', 'locationName' => 'pos', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'JsPage' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'ConditionNameSet' => [
            'type' => 'structure',
            'members' => [
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'opposite' => [ 'type' => 'string', 'locationName' => 'opposite', ],
            ],
        ],
        'ListProxycacheUrl' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'proto' => [ 'type' => 'string', 'locationName' => 'proto', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListWebcacheUrlCfg' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'website' => [ 'type' => 'integer', 'locationName' => 'website', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'RiskPolicyRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'leftType' => [ 'type' => 'string', 'locationName' => 'leftType', ],
                'left' => [ 'type' => 'string', 'locationName' => 'left', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'rightType' => [ 'type' => 'string', 'locationName' => 'rightType', ],
                'right' => [ 'type' => 'string', 'locationName' => 'right', ],
            ],
        ],
        'ListWafConditionsReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'ListRuleListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'RiskRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'methods' => [ 'type' => 'string', 'locationName' => 'methods', ],
                'sceneRef' => [ 'type' => 'string', 'locationName' => 'sceneRef', ],
                'event' => [ 'type' => 'string', 'locationName' => 'event', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'EnableReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'ListRewriteRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'rewriteType' => [ 'type' => 'string', 'locationName' => 'rewriteType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'SetBotThreatIpRuleReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'botType' => [ 'type' => 'string', 'locationName' => 'botType', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'SetIpReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'isEnable' => [ 'type' => 'integer', 'locationName' => 'isEnable', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpCfg', ], ],
            ],
        ],
        'ListPagesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'checkStatus' => [ 'type' => 'integer', 'locationName' => 'checkStatus', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'AtCfg' => [
            'type' => 'structure',
            'members' => [
                'denyAction' =>  [ 'shape' => 'DenyActionCfg', ],
                'skipAction' =>  [ 'shape' => 'SkipActionCfg', ],
            ],
        ],
        'RateLimitRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'host' =>  [ 'shape' => 'MatchOpValCfg', ],
                'url' =>  [ 'shape' => 'MatchOpValCfg', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'rate' => [ 'type' => 'integer', 'locationName' => 'rate', ],
                'burst' => [ 'type' => 'integer', 'locationName' => 'burst', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'SetBotFakeSpiderRuleReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'GeoListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'geo' => [ 'type' => 'string', 'locationName' => 'geo', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'ListFilterReqRespRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'opObject' => [ 'type' => 'string', 'locationName' => 'opObject', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'IpCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'ListWafConditionCfg' => [
            'type' => 'structure',
            'members' => [
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'DelRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'SetIntSemReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enableIntSem' => [ 'type' => 'integer', 'locationName' => 'enableIntSem', ],
                'intSemMode' => [ 'type' => 'string', 'locationName' => 'intSemMode', ],
            ],
        ],
        'SetHeaderReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValCfg', ], ],
            ],
        ],
        'SetFilterReqRespRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'opObject' => [ 'type' => 'string', 'locationName' => 'opObject', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'valType' => [ 'type' => 'string', 'locationName' => 'valType', ],
            ],
        ],
        'SetRiskEventReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'SetRiskRuleReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'methods' => [ 'type' => 'string', 'locationName' => 'methods', ],
                'sceneRef' => [ 'type' => 'string', 'locationName' => 'sceneRef', ],
                'event' => [ 'type' => 'string', 'locationName' => 'event', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'RiskJsCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'AntiLevelWafReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'wafLevel' => [ 'type' => 'integer', 'locationName' => 'wafLevel', ],
                'usrPolicy' => [ 'type' => 'long', 'locationName' => 'usrPolicy', ],
            ],
        ],
        'ListCcRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'matchType' => [ 'type' => 'integer', 'locationName' => 'matchType', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'singleIpLimit' => [ 'type' => 'integer', 'locationName' => 'singleIpLimit', ],
                'blockType' => [ 'type' => 'integer', 'locationName' => 'blockType', ],
                'blockTime' => [ 'type' => 'integer', 'locationName' => 'blockTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dmvalue' => [ 'type' => 'string', 'locationName' => 'dmvalue', ],
            ],
        ],
        'SetListRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'listType' => [ 'type' => 'string', 'locationName' => 'listType', ],
                'listRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListRuleCfg', ], ],
            ],
        ],
        'ListListRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'listType' => [ 'type' => 'string', 'locationName' => 'listType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ListJsPageReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'EnableNameReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'ListProxycacheUrlCfg' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'urls' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListProxycacheUrl', ], ],
            ],
        ],
        'UsrBotRules' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'detectThrsd' => [ 'type' => 'integer', 'locationName' => 'detectThrsd', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'matchItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'BotMatchItem', ], ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'ststhrst' => [ 'type' => 'integer', 'locationName' => 'ststhrst', ],
                'ststhrstRatio' => [ 'type' => 'integer', 'locationName' => 'ststhrstRatio', ],
                'statusDisable' => [ 'type' => 'integer', 'locationName' => 'statusDisable', ],
                'dateDisable' => [ 'type' => 'integer', 'locationName' => 'dateDisable', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'blockTime' => [ 'type' => 'integer', 'locationName' => 'blockTime', ],
            ],
        ],
        'ValListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'StatusCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'oriStatus' => [ 'type' => 'string', 'locationName' => 'oriStatus', ],
                'setStatus' => [ 'type' => 'string', 'locationName' => 'setStatus', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
            ],
        ],
        'ListDenySkipRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'SetGeoReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'geos' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoCfg', ], ],
            ],
        ],
        'SetPagesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pages' => [ 'type' => 'list', 'member' => [ 'shape' => 'PageCfg', ], ],
            ],
        ],
        'KeyValListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'RiskVarCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'eventCode' => [ 'type' => 'string', 'locationName' => 'eventCode', ],
                'varType' => [ 'type' => 'string', 'locationName' => 'varType', ],
                'cost' => [ 'type' => 'string', 'locationName' => 'cost', ],
                'output' => [ 'type' => 'string', 'locationName' => 'output', ],
                'property' => [ 'type' => 'string', 'locationName' => 'property', ],
                'dura' => [ 'type' => 'string', 'locationName' => 'dura', ],
                'logic' => [ 'type' => 'string', 'locationName' => 'logic', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RiskVarRuleCfg', ], ],
                'pos' => [ 'type' => 'string', 'locationName' => 'pos', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'FakeSpdBotRules' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
            ],
        ],
        'FilterReqRespRulesConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'opObject' => [ 'type' => 'string', 'locationName' => 'opObject', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'valType' => [ 'type' => 'string', 'locationName' => 'valType', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'isForceApply' => [ 'type' => 'integer', 'locationName' => 'isForceApply', ],
            ],
        ],
        'ListRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'PageCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'AntiSpiderConfReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
            ],
        ],
        'SetCcRuleReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'matchType' => [ 'type' => 'integer', 'locationName' => 'matchType', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'singleIpLimit' => [ 'type' => 'integer', 'locationName' => 'singleIpLimit', ],
                'blockType' => [ 'type' => 'integer', 'locationName' => 'blockType', ],
                'blockTime' => [ 'type' => 'integer', 'locationName' => 'blockTime', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
                'dimension' => [ 'type' => 'string', 'locationName' => 'dimension', ],
                'dmvalue' => [ 'type' => 'string', 'locationName' => 'dmvalue', ],
            ],
        ],
        'SetWafRuleReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConditionIdSet', ], ],
            ],
        ],
        'ThreatIpBotRules' => [
            'type' => 'structure',
            'members' => [
                'botType' => [ 'type' => 'string', 'locationName' => 'botType', ],
                'botTypeZh' => [ 'type' => 'string', 'locationName' => 'botTypeZh', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
            ],
        ],
        'SetRiskPolicyReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'eventCode' => [ 'type' => 'string', 'locationName' => 'eventCode', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'logic' => [ 'type' => 'string', 'locationName' => 'logic', ],
                'rules' =>  [ 'shape' => 'RiskPolicyRuleCfg', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'SetWafConditionReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterCfg', ], ],
            ],
        ],
        'ListRiskEventVarsReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'ListWafFilterCfg' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'conditionId' => [ 'type' => 'string', 'locationName' => 'conditionId', ],
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterCfg', ], ],
            ],
        ],
        'RewriteRuleListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'oriVal' => [ 'type' => 'string', 'locationName' => 'oriVal', ],
                'setVal' => [ 'type' => 'string', 'locationName' => 'setVal', ],
            ],
        ],
        'SetBotStdRuleReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'botType' => [ 'type' => 'string', 'locationName' => 'botType', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'StdBotRules' => [
            'type' => 'structure',
            'members' => [
                'botType' => [ 'type' => 'string', 'locationName' => 'botType', ],
                'subType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
            ],
        ],
        'SetUserAntiCfgReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'filterHeaderEnable' => [ 'type' => 'string', 'locationName' => 'filterHeaderEnable', ],
                'reqHeaderEnable' => [ 'type' => 'string', 'locationName' => 'reqHeaderEnable', ],
                'respHeaderEnable' => [ 'type' => 'string', 'locationName' => 'respHeaderEnable', ],
                'filterSenseEnable' => [ 'type' => 'string', 'locationName' => 'filterSenseEnable', ],
                'statusEnable' => [ 'type' => 'string', 'locationName' => 'statusEnable', ],
                'skipEnable' => [ 'type' => 'string', 'locationName' => 'skipEnable', ],
                'denyEnable' => [ 'type' => 'string', 'locationName' => 'denyEnable', ],
                'ratelimitEnable' => [ 'type' => 'string', 'locationName' => 'ratelimitEnable', ],
                'uriRewriteEnable' => [ 'type' => 'string', 'locationName' => 'uriRewriteEnable', ],
            ],
        ],
        'ValCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'CacheItemCfg' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'DelRuleNameReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ListBotThreatIpRuleReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'RiskEventCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'policyCount' => [ 'type' => 'integer', 'locationName' => 'policyCount', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetBotUsrRuleReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'detectThrsd' => [ 'type' => 'integer', 'locationName' => 'detectThrsd', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'matchItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'BotMatchItem', ], ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'ststhrst' => [ 'type' => 'integer', 'locationName' => 'ststhrst', ],
                'ststhrstRatio' => [ 'type' => 'integer', 'locationName' => 'ststhrstRatio', ],
                'statusDisable' => [ 'type' => 'integer', 'locationName' => 'statusDisable', ],
                'dateDisable' => [ 'type' => 'integer', 'locationName' => 'dateDisable', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'blockTime' => [ 'type' => 'integer', 'locationName' => 'blockTime', ],
            ],
        ],
        'MatchOpValCfg' => [
            'type' => 'structure',
            'members' => [
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'integer', 'locationName' => 'val', ],
            ],
        ],
        'SetStatusReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'status' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatusCfg', ], ],
            ],
        ],
        'SetIpbanReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'detectTime' => [ 'type' => 'integer', 'locationName' => 'detectTime', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
                'banTime' => [ 'type' => 'integer', 'locationName' => 'banTime', ],
            ],
        ],
        'SetUriReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'uris' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValCfg', ], ],
            ],
        ],
        'RewriteRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'oriVal' => [ 'type' => 'string', 'locationName' => 'oriVal', ],
                'setVal' => [ 'type' => 'string', 'locationName' => 'setVal', ],
            ],
        ],
        'RateLimitRuleListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'host' =>  [ 'shape' => 'MatchOpValCfg', ],
                'url' =>  [ 'shape' => 'MatchOpValCfg', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'rate' => [ 'type' => 'integer', 'locationName' => 'rate', ],
                'burst' => [ 'type' => 'integer', 'locationName' => 'burst', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'SetJsPageReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'SetRiskUsrListReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'rules' => [ 'type' => 'string', 'locationName' => 'rules', ],
                'bz64File' => [ 'type' => 'string', 'locationName' => 'bz64File', ],
            ],
        ],
        'AntiModeCcReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ccMode' => [ 'type' => 'integer', 'locationName' => 'ccMode', ],
                'qps' => [ 'type' => 'integer', 'locationName' => 'qps', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
            ],
        ],
        'ListFilterSenseinfoReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'GetInstanceReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'FuncList' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ReNickNameReq' => [
            'type' => 'structure',
            'members' => [
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
            ],
        ],
        'SetWafInstanceIdRegionReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'InstanceIdCfg' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'domainPackages' => [ 'type' => 'integer', 'locationName' => 'domainPackages', ],
                'extraBitsLimit' => [ 'type' => 'integer', 'locationName' => 'extraBitsLimit', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'releaseingTime' => [ 'type' => 'string', 'locationName' => 'releaseingTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'valid' => [ 'type' => 'integer', 'locationName' => 'valid', ],
            ],
        ],
        'HandlePackReq' => [
            'type' => 'structure',
            'members' => [
                'operation' => [ 'type' => 'string', 'locationName' => 'operation', ],
            ],
        ],
        'ContactGroup' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'SetReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'warnType' => [ 'type' => 'string', 'locationName' => 'warnType', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'detectUnit' => [ 'type' => 'string', 'locationName' => 'detectUnit', ],
            ],
        ],
        'WarningCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'warnType' => [ 'type' => 'string', 'locationName' => 'warnType', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'detectSpan' => [ 'type' => 'integer', 'locationName' => 'detectSpan', ],
                'detectThreshold' => [ 'type' => 'integer', 'locationName' => 'detectThreshold', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'detectUnit' => [ 'type' => 'string', 'locationName' => 'detectUnit', ],
                'contactWays' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactorPersons' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactPerson', ], ],
                'contactorGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactGroup', ], ],
                'detectItems' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Contactor' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'DisableReq' => [
            'type' => 'structure',
            'members' => [
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'ListReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DelReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'WarnContactor' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'ContactPerson' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'DescribeLbOutIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeLbOutIpResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeLbOutIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'object', 'locationName' => 'list', ],
            ],
        ],
        'DescribeLbOutIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'OrderReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpgradeInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'OrderReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'UpgradeInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpgradeInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'UpgradeInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'BindCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AssignCertReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetAvailableCertForDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAvailableCertForDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindCertResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetAvailableCertForDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetAvailableCertReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetAvailableCertForDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindCertId' => [ 'type' => 'string', 'locationName' => 'bindCertId', ],
                'bindCertName' => [ 'type' => 'string', 'locationName' => 'bindCertName', ],
                'certIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'certNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'GetStatusCodeInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetStatusCodeInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetEsLogDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'remote_addr' => [ 'type' => 'string', 'locationName' => 'remote_addr', ],
                'document_uri' => [ 'type' => 'string', 'locationName' => 'document_uri', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'anti_geo' => [ 'type' => 'string', 'locationName' => 'anti_geo', ],
                'request_method' => [ 'type' => 'string', 'locationName' => 'request_method', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'logType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetBpsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetChartReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetEsLogDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetEsLogDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBpsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBpsDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMainAntiInfoNewResultShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'integer', 'locationName' => 'ip', ],
                'ipPre' => [ 'type' => 'integer', 'locationName' => 'ipPre', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
                'pvPre' => [ 'type' => 'integer', 'locationName' => 'pvPre', ],
                'maxBps' => [ 'type' => 'integer', 'locationName' => 'maxBps', ],
                'maxBpsPre' => [ 'type' => 'integer', 'locationName' => 'maxBpsPre', ],
                'wafAnti' => [ 'type' => 'integer', 'locationName' => 'wafAnti', ],
                'wafAntiPre' => [ 'type' => 'integer', 'locationName' => 'wafAntiPre', ],
                'domainCount' => [ 'type' => 'integer', 'locationName' => 'domainCount', ],
                'aclAnti' => [ 'type' => 'integer', 'locationName' => 'aclAnti', ],
                'aclAntiPre' => [ 'type' => 'integer', 'locationName' => 'aclAntiPre', ],
                'ccAnti' => [ 'type' => 'integer', 'locationName' => 'ccAnti', ],
                'ccAntiPre' => [ 'type' => 'integer', 'locationName' => 'ccAntiPre', ],
                'botAnti' => [ 'type' => 'integer', 'locationName' => 'botAnti', ],
                'botAntiPre' => [ 'type' => 'integer', 'locationName' => 'botAntiPre', ],
            ],
        ],
        'GetAntiEventRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetAntiEventReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetStatusCodeInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'statusCodeData' =>  [ 'shape' => 'StatusCodeData', ],
            ],
        ],
        'GetMainAntiInfoNewRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetChartReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetEsLogDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'EsLogEvent', ], ],
            ],
        ],
        'GetStatusCodeInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetStatusCodeReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetMainAntiInfoNewResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMainAntiInfoNewResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBpsDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'bps' =>  [ 'shape' => 'Bps', ],
            ],
        ],
        'GetAntiEventResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAntiEventResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetQpsDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
                'qps' =>  [ 'shape' => 'Qps', ],
            ],
        ],
        'GetAntiEventResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'events' => [ 'type' => 'list', 'member' => [ 'shape' => 'AntiEvent', ], ],
            ],
        ],
        'GetQpsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetQpsDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetQpsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetChartReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDomainLbConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'CommonReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'EnableCname2RsExternalResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListMainCfgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListMainCfgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListMainCfgResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainMainConfig', ], ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'EnableCname2RsExternalResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddDomain', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'ListMainCfgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListDomains', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetDomainAntiConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainAntiConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'CommonReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetDomainLbConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainLbConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainAntiConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'CommonReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DisableRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DisableRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DisableRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainMainConfig', ], ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'AddDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddDomain', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetDomainLbConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'config' =>  [ 'shape' => 'LbConfig', ],
            ],
        ],
        'UpdateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableCname2RsExternalRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ActiveFuncReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetDomainAntiConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'disableWaf' => [ 'type' => 'integer', 'locationName' => 'disableWaf', ],
                'aclConf' =>  [ 'shape' => 'AclConf', ],
                'antispiderConf' =>  [ 'shape' => 'EnableConf', ],
                'ccConf' =>  [ 'shape' => 'CcConf', ],
                'denyConf' =>  [ 'shape' => 'DenyConf', ],
                'intSemConf' =>  [ 'shape' => 'IntSemConf', ],
                'ipbanConf' =>  [ 'shape' => 'IpbanConf', ],
                'ratelimitConf' =>  [ 'shape' => 'RatelimitConf', ],
                'threatinfoConf' =>  [ 'shape' => 'EnableConf', ],
                'userDefPageConf' =>  [ 'shape' => 'UserDefPageConf', ],
                'wafConf' =>  [ 'shape' => 'WafConf', ],
                'webUserdefConf' =>  [ 'shape' => 'WebUserdefConf', ],
                'webcacheConf' =>  [ 'shape' => 'EnableConf', ],
                'skipConf' =>  [ 'shape' => 'SkipConf', ],
                'filterHeaderConf' =>  [ 'shape' => 'FilterHeaderConf', ],
                'filterSenseConf' =>  [ 'shape' => 'FilterSenseConf', ],
                'statusConf' =>  [ 'shape' => 'StatusConf', ],
                'uriRewriteConf' =>  [ 'shape' => 'UriRewriteConf', ],
                'proxycacheConf' =>  [ 'shape' => 'EnableConf', ],
                'riskConf' =>  [ 'shape' => 'RiskConf', ],
                'botConf' =>  [ 'shape' => 'BotConf', ],
            ],
        ],
        'DeleteDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListDomains', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListBotStdRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListBotStdRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListWafConditionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListWafConditionsReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafFilterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListWafFilterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelWafRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafFilterResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' =>  [ 'shape' => 'ListWafFilterCfg', ],
            ],
        ],
        'SetWafConditionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetWafConditionReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafConditionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListWafConditionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWafResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListBotStdRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' =>  [ 'shape' => 'StdBotRules', ],
            ],
        ],
        'AntiLevelWafResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableWafRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'EnableReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListWafRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetWafConditionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelWafRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetWafConditionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AntiLevelWafRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AntiLevelWafReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'EnableWafResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListWafRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' =>  [ 'shape' => 'ListWafRuleCfg', ],
            ],
        ],
        'SetWafRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetWafRuleReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelWafConditionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'EnableWafUserDefineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetWafUserDefineReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelWafRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListBotStdRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListBotStdRuleReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'AntiModeWafResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetWafRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelWafConditionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWafUserDefineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListWafFilterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListWafFilterReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafConditionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' =>  [ 'shape' => 'ListWafConditionCfg', ],
            ],
        ],
        'SetWafRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AntiLevelWafResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AntiModeWafResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AntiModeWafRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AntiModeWafReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'EnableWafUserDefineResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelWafConditionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListWafRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetWafInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetWafInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetWafInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'idc' => [ 'type' => 'string', 'locationName' => 'idc', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sourceIds' => [ 'type' => 'string', 'locationName' => 'sourceIds', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetWafInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'instanceIdCfg' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceIdCfg', ], ],
            ],
        ],
    ],
];
