<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'cdn',
        'protocol' => 'json',
//        'serviceFullName' => 'cdn',
//        'serviceId' => 'cdn',
    ],
    'operations' => [
        'QueryDomainsLog' => [
            'name' => 'QueryDomainsLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/logs',
            ],
            'input' => [ 'shape' => 'QueryDomainsLogRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainsLogResponseShape', ],
        ],
        'QueryDomainLog' => [
            'name' => 'QueryDomainLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/log',
            ],
            'input' => [ 'shape' => 'QueryDomainLogRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainLogResponseShape', ],
        ],
        'QueryOnlineBillingType' => [
            'name' => 'QueryOnlineBillingType',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/onlineBillingType',
            ],
            'input' => [ 'shape' => 'QueryOnlineBillingTypeRequestShape', ],
            'output' => [ 'shape' => 'QueryOnlineBillingTypeResponseShape', ],
        ],
        'SetOnlineBillingType' => [
            'name' => 'SetOnlineBillingType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/onlineBillingType',
            ],
            'input' => [ 'shape' => 'SetOnlineBillingTypeRequestShape', ],
            'output' => [ 'shape' => 'SetOnlineBillingTypeResponseShape', ],
        ],
        'SetAuthConfig' => [
            'name' => 'SetAuthConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/setAuthConfig',
            ],
            'input' => [ 'shape' => 'SetAuthConfigRequestShape', ],
            'output' => [ 'shape' => 'SetAuthConfigResponseShape', ],
        ],
        'SetSourceAuthConfig' => [
            'name' => 'SetSourceAuthConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/setSourceAuthConfig',
            ],
            'input' => [ 'shape' => 'SetSourceAuthConfigRequestShape', ],
            'output' => [ 'shape' => 'SetSourceAuthConfigResponseShape', ],
        ],
        'QueryBand' => [
            'name' => 'QueryBand',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/bandQuery',
            ],
            'input' => [ 'shape' => 'QueryBandRequestShape', ],
            'output' => [ 'shape' => 'QueryBandResponseShape', ],
        ],
        'QueryBandWithArea' => [
            'name' => 'QueryBandWithArea',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/bandQuery:areaIsp',
            ],
            'input' => [ 'shape' => 'QueryBandWithAreaRequestShape', ],
            'output' => [ 'shape' => 'QueryBandWithAreaResponseShape', ],
        ],
        'QueryDomainConfigStatus' => [
            'name' => 'QueryDomainConfigStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{taskId}/status',
            ],
            'input' => [ 'shape' => 'QueryDomainConfigStatusRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainConfigStatusResponseShape', ],
        ],
        'QueryAreaIspList' => [
            'name' => 'QueryAreaIspList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/console:areaIspList',
            ],
            'input' => [ 'shape' => 'QueryAreaIspListRequestShape', ],
            'output' => [ 'shape' => 'QueryAreaIspListResponseShape', ],
        ],
        'QueryAreaIspListV2' => [
            'name' => 'QueryAreaIspListV2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/console:areaIspListV2',
            ],
            'input' => [ 'shape' => 'QueryAreaIspListV2RequestShape', ],
            'output' => [ 'shape' => 'QueryAreaIspListV2ResponseShape', ],
        ],
        'QueryForbiddenInfoList' => [
            'name' => 'QueryForbiddenInfoList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/forbiddenInfo:query',
            ],
            'input' => [ 'shape' => 'QueryForbiddenInfoListRequestShape', ],
            'output' => [ 'shape' => 'QueryForbiddenInfoListResponseShape', ],
        ],
        'CreateForbiddenInfo' => [
            'name' => 'CreateForbiddenInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/forbiddenInfo:create',
            ],
            'input' => [ 'shape' => 'CreateForbiddenInfoRequestShape', ],
            'output' => [ 'shape' => 'CreateForbiddenInfoResponseShape', ],
        ],
        'DeleteForbiddenInfo' => [
            'name' => 'DeleteForbiddenInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/forbiddenInfo:delete',
            ],
            'input' => [ 'shape' => 'DeleteForbiddenInfoRequestShape', ],
            'output' => [ 'shape' => 'DeleteForbiddenInfoResponseShape', ],
        ],
        'QueryUnForbiddenStatus' => [
            'name' => 'QueryUnForbiddenStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/unForbiddenStatus',
            ],
            'input' => [ 'shape' => 'QueryUnForbiddenStatusRequestShape', ],
            'output' => [ 'shape' => 'QueryUnForbiddenStatusResponseShape', ],
        ],
        'PreviewCertificate' => [
            'name' => 'PreviewCertificate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/certificate',
            ],
            'input' => [ 'shape' => 'PreviewCertificateRequestShape', ],
            'output' => [ 'shape' => 'PreviewCertificateResponseShape', ],
        ],
        'QueryDefaultHttpHeaderKey' => [
            'name' => 'QueryDefaultHttpHeaderKey',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/defaultHttpHeaderKey',
            ],
            'input' => [ 'shape' => 'QueryDefaultHttpHeaderKeyRequestShape', ],
            'output' => [ 'shape' => 'QueryDefaultHttpHeaderKeyResponseShape', ],
        ],
        'QueryIpBlackList' => [
            'name' => 'QueryIpBlackList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/ipBlackList',
            ],
            'input' => [ 'shape' => 'QueryIpBlackListRequestShape', ],
            'output' => [ 'shape' => 'QueryIpBlackListResponseShape', ],
        ],
        'SetIpBlackList' => [
            'name' => 'SetIpBlackList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/ipBlackList',
            ],
            'input' => [ 'shape' => 'SetIpBlackListRequestShape', ],
            'output' => [ 'shape' => 'SetIpBlackListResponseShape', ],
        ],
        'OperateIpBlackList' => [
            'name' => 'OperateIpBlackList',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/domain/{domain}/ipBlackList:operate',
            ],
            'input' => [ 'shape' => 'OperateIpBlackListRequestShape', ],
            'output' => [ 'shape' => 'OperateIpBlackListResponseShape', ],
        ],
        'QueryCustomErrorPage' => [
            'name' => 'QueryCustomErrorPage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/customErrorPage',
            ],
            'input' => [ 'shape' => 'QueryCustomErrorPageRequestShape', ],
            'output' => [ 'shape' => 'QueryCustomErrorPageResponseShape', ],
        ],
        'SetCustomErrorPage' => [
            'name' => 'SetCustomErrorPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/customErrorPage',
            ],
            'input' => [ 'shape' => 'SetCustomErrorPageRequestShape', ],
            'output' => [ 'shape' => 'SetCustomErrorPageResponseShape', ],
        ],
        'CreateCacheRule' => [
            'name' => 'CreateCacheRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/cacheRule',
            ],
            'input' => [ 'shape' => 'CreateCacheRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateCacheRuleResponseShape', ],
        ],
        'UpdateCacheRule' => [
            'name' => 'UpdateCacheRule',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/domain/{domain}/cacheRule',
            ],
            'input' => [ 'shape' => 'UpdateCacheRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdateCacheRuleResponseShape', ],
        ],
        'DeleteCacheRule' => [
            'name' => 'DeleteCacheRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/domain/{domain}/cacheRule',
            ],
            'input' => [ 'shape' => 'DeleteCacheRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteCacheRuleResponseShape', ],
        ],
        'SetCacheRules' => [
            'name' => 'SetCacheRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/cacheRules',
            ],
            'input' => [ 'shape' => 'SetCacheRulesRequestShape', ],
            'output' => [ 'shape' => 'SetCacheRulesResponseShape', ],
        ],
        'QueryHttpHeader' => [
            'name' => 'QueryHttpHeader',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/httpHeader',
            ],
            'input' => [ 'shape' => 'QueryHttpHeaderRequestShape', ],
            'output' => [ 'shape' => 'QueryHttpHeaderResponseShape', ],
        ],
        'SetHttpHeader' => [
            'name' => 'SetHttpHeader',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/httpHeader',
            ],
            'input' => [ 'shape' => 'SetHttpHeaderRequestShape', ],
            'output' => [ 'shape' => 'SetHttpHeaderResponseShape', ],
        ],
        'DeleteHttpHeader' => [
            'name' => 'DeleteHttpHeader',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/domain/{domain}/httpHeader',
            ],
            'input' => [ 'shape' => 'DeleteHttpHeaderRequestShape', ],
            'output' => [ 'shape' => 'DeleteHttpHeaderResponseShape', ],
        ],
        'SetVideoDraft' => [
            'name' => 'SetVideoDraft',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/videoDraft',
            ],
            'input' => [ 'shape' => 'SetVideoDraftRequestShape', ],
            'output' => [ 'shape' => 'SetVideoDraftResponseShape', ],
        ],
        'SetRange' => [
            'name' => 'SetRange',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/range',
            ],
            'input' => [ 'shape' => 'SetRangeRequestShape', ],
            'output' => [ 'shape' => 'SetRangeResponseShape', ],
        ],
        'SetIgnoreQueryString' => [
            'name' => 'SetIgnoreQueryString',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/ignoreQueryString',
            ],
            'input' => [ 'shape' => 'SetIgnoreQueryStringRequestShape', ],
            'output' => [ 'shape' => 'SetIgnoreQueryStringResponseShape', ],
        ],
        'SetFilterArgs' => [
            'name' => 'SetFilterArgs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/filterArgs:set',
            ],
            'input' => [ 'shape' => 'SetFilterArgsRequestShape', ],
            'output' => [ 'shape' => 'SetFilterArgsResponseShape', ],
        ],
        'QueryFilterArgs' => [
            'name' => 'QueryFilterArgs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/filterArgs:query',
            ],
            'input' => [ 'shape' => 'QueryFilterArgsRequestShape', ],
            'output' => [ 'shape' => 'QueryFilterArgsResponseShape', ],
        ],
        'QueryUserAgent' => [
            'name' => 'QueryUserAgent',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/userAgentConfig',
            ],
            'input' => [ 'shape' => 'QueryUserAgentRequestShape', ],
            'output' => [ 'shape' => 'QueryUserAgentResponseShape', ],
        ],
        'SetUserAgentConfig' => [
            'name' => 'SetUserAgentConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/userAgentConfig',
            ],
            'input' => [ 'shape' => 'SetUserAgentConfigRequestShape', ],
            'output' => [ 'shape' => 'SetUserAgentConfigResponseShape', ],
        ],
        'QueryAccesskeyConfig' => [
            'name' => 'QueryAccesskeyConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/accesskeyConfig',
            ],
            'input' => [ 'shape' => 'QueryAccesskeyConfigRequestShape', ],
            'output' => [ 'shape' => 'QueryAccesskeyConfigResponseShape', ],
        ],
        'SetAccesskeyConfig' => [
            'name' => 'SetAccesskeyConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/accesskeyConfig',
            ],
            'input' => [ 'shape' => 'SetAccesskeyConfigRequestShape', ],
            'output' => [ 'shape' => 'SetAccesskeyConfigResponseShape', ],
        ],
        'SetRefer' => [
            'name' => 'SetRefer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/refer',
            ],
            'input' => [ 'shape' => 'SetReferRequestShape', ],
            'output' => [ 'shape' => 'SetReferResponseShape', ],
        ],
        'QueryMonitor' => [
            'name' => 'QueryMonitor',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/monitor',
            ],
            'input' => [ 'shape' => 'QueryMonitorRequestShape', ],
            'output' => [ 'shape' => 'QueryMonitorResponseShape', ],
        ],
        'SetMonitor' => [
            'name' => 'SetMonitor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/monitor',
            ],
            'input' => [ 'shape' => 'SetMonitorRequestShape', ],
            'output' => [ 'shape' => 'SetMonitorResponseShape', ],
        ],
        'StopMonitor' => [
            'name' => 'StopMonitor',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/monitor:stop',
            ],
            'input' => [ 'shape' => 'StopMonitorRequestShape', ],
            'output' => [ 'shape' => 'StopMonitorResponseShape', ],
        ],
        'SetSource' => [
            'name' => 'SetSource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/source',
            ],
            'input' => [ 'shape' => 'SetSourceRequestShape', ],
            'output' => [ 'shape' => 'SetSourceResponseShape', ],
        ],
        'OperateShareCache' => [
            'name' => 'OperateShareCache',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/shareCache',
            ],
            'input' => [ 'shape' => 'OperateShareCacheRequestShape', ],
            'output' => [ 'shape' => 'OperateShareCacheResponseShape', ],
        ],
        'SetHttpType' => [
            'name' => 'SetHttpType',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/httpType',
            ],
            'input' => [ 'shape' => 'SetHttpTypeRequestShape', ],
            'output' => [ 'shape' => 'SetHttpTypeResponseShape', ],
        ],
        'QueryFollowRedirect' => [
            'name' => 'QueryFollowRedirect',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/followRedirect',
            ],
            'input' => [ 'shape' => 'QueryFollowRedirectRequestShape', ],
            'output' => [ 'shape' => 'QueryFollowRedirectResponseShape', ],
        ],
        'SetFollowRedirect' => [
            'name' => 'SetFollowRedirect',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/followRedirect',
            ],
            'input' => [ 'shape' => 'SetFollowRedirectRequestShape', ],
            'output' => [ 'shape' => 'SetFollowRedirectResponseShape', ],
        ],
        'QueryFollowSourceProtocol' => [
            'name' => 'QueryFollowSourceProtocol',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/followSourceProtocol',
            ],
            'input' => [ 'shape' => 'QueryFollowSourceProtocolRequestShape', ],
            'output' => [ 'shape' => 'QueryFollowSourceProtocolResponseShape', ],
        ],
        'SetFollowSourceProtocol' => [
            'name' => 'SetFollowSourceProtocol',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/followSourceProtocol',
            ],
            'input' => [ 'shape' => 'SetFollowSourceProtocolRequestShape', ],
            'output' => [ 'shape' => 'SetFollowSourceProtocolResponseShape', ],
        ],
        'SetDomainConfig' => [
            'name' => 'SetDomainConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/config',
            ],
            'input' => [ 'shape' => 'SetDomainConfigRequestShape', ],
            'output' => [ 'shape' => 'SetDomainConfigResponseShape', ],
        ],
        'QueryDomainAllConfigClassify' => [
            'name' => 'QueryDomainAllConfigClassify',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/queryDomainAllConfigClassify',
            ],
            'input' => [ 'shape' => 'QueryDomainAllConfigClassifyRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainAllConfigClassifyResponseShape', ],
        ],
        'ExecuteDomainCopy' => [
            'name' => 'ExecuteDomainCopy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/executeDomainCopy',
            ],
            'input' => [ 'shape' => 'ExecuteDomainCopyRequestShape', ],
            'output' => [ 'shape' => 'ExecuteDomainCopyResponseShape', ],
        ],
        'QueryExtraCacheTime' => [
            'name' => 'QueryExtraCacheTime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/extraCacheTime:query',
            ],
            'input' => [ 'shape' => 'QueryExtraCacheTimeRequestShape', ],
            'output' => [ 'shape' => 'QueryExtraCacheTimeResponseShape', ],
        ],
        'SetExtraCacheTime' => [
            'name' => 'SetExtraCacheTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/extraCacheTime:set',
            ],
            'input' => [ 'shape' => 'SetExtraCacheTimeRequestShape', ],
            'output' => [ 'shape' => 'SetExtraCacheTimeResponseShape', ],
        ],
        'DeleteExtraCacheTime' => [
            'name' => 'DeleteExtraCacheTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/extraCacheTime:delete',
            ],
            'input' => [ 'shape' => 'DeleteExtraCacheTimeRequestShape', ],
            'output' => [ 'shape' => 'DeleteExtraCacheTimeResponseShape', ],
        ],
        'BatchSetExtraCacheTime' => [
            'name' => 'BatchSetExtraCacheTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/extraCacheTime:batchSet',
            ],
            'input' => [ 'shape' => 'BatchSetExtraCacheTimeRequestShape', ],
            'output' => [ 'shape' => 'BatchSetExtraCacheTimeResponseShape', ],
        ],
        'SetGzip' => [
            'name' => 'SetGzip',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/gzip',
            ],
            'input' => [ 'shape' => 'SetGzipRequestShape', ],
            'output' => [ 'shape' => 'SetGzipResponseShape', ],
        ],
        'ConfigBackSourceRule' => [
            'name' => 'ConfigBackSourceRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/configBackSourceRule',
            ],
            'input' => [ 'shape' => 'ConfigBackSourceRuleRequestShape', ],
            'output' => [ 'shape' => 'ConfigBackSourceRuleResponseShape', ],
        ],
        'QueryBackSourceRule' => [
            'name' => 'QueryBackSourceRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/queryBackSourceRule',
            ],
            'input' => [ 'shape' => 'QueryBackSourceRuleRequestShape', ],
            'output' => [ 'shape' => 'QueryBackSourceRuleResponseShape', ],
        ],
        'ConfigUrlRule' => [
            'name' => 'ConfigUrlRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/configUrlRule',
            ],
            'input' => [ 'shape' => 'ConfigUrlRuleRequestShape', ],
            'output' => [ 'shape' => 'ConfigUrlRuleResponseShape', ],
        ],
        'QueryUrlRule' => [
            'name' => 'QueryUrlRule',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/queryUrlRule',
            ],
            'input' => [ 'shape' => 'QueryUrlRuleRequestShape', ],
            'output' => [ 'shape' => 'QueryUrlRuleResponseShape', ],
        ],
        'ConfigHttp2' => [
            'name' => 'ConfigHttp2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/configHttp2',
            ],
            'input' => [ 'shape' => 'ConfigHttp2RequestShape', ],
            'output' => [ 'shape' => 'ConfigHttp2ResponseShape', ],
        ],
        'QueryHttp2' => [
            'name' => 'QueryHttp2',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/queryHttp2',
            ],
            'input' => [ 'shape' => 'QueryHttp2RequestShape', ],
            'output' => [ 'shape' => 'QueryHttp2ResponseShape', ],
        ],
        'ConfigBackSourcePath' => [
            'name' => 'ConfigBackSourcePath',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/configBackSourcePath',
            ],
            'input' => [ 'shape' => 'ConfigBackSourcePathRequestShape', ],
            'output' => [ 'shape' => 'ConfigBackSourcePathResponseShape', ],
        ],
        'QueryBackSourcePath' => [
            'name' => 'QueryBackSourcePath',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/queryBackSourcePath',
            ],
            'input' => [ 'shape' => 'QueryBackSourcePathRequestShape', ],
            'output' => [ 'shape' => 'QueryBackSourcePathResponseShape', ],
        ],
        'SetAccelerateRegion' => [
            'name' => 'SetAccelerateRegion',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/accelerateRegion',
            ],
            'input' => [ 'shape' => 'SetAccelerateRegionRequestShape', ],
            'output' => [ 'shape' => 'SetAccelerateRegionResponseShape', ],
        ],
        'QueryDomainGroupList' => [
            'name' => 'QueryDomainGroupList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domainGroup',
            ],
            'input' => [ 'shape' => 'QueryDomainGroupListRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainGroupListResponseShape', ],
        ],
        'QueryDomainGroupDetail' => [
            'name' => 'QueryDomainGroupDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domainGroup/{id}',
            ],
            'input' => [ 'shape' => 'QueryDomainGroupDetailRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainGroupDetailResponseShape', ],
        ],
        'QueryDomainsNotInGroup' => [
            'name' => 'QueryDomainsNotInGroup',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domainGroup:notInGroup',
            ],
            'input' => [ 'shape' => 'QueryDomainsNotInGroupRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainsNotInGroupResponseShape', ],
        ],
        'UpdateDomainGroup' => [
            'name' => 'UpdateDomainGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domainGroup/{id}:update',
            ],
            'input' => [ 'shape' => 'UpdateDomainGroupRequestShape', ],
            'output' => [ 'shape' => 'UpdateDomainGroupResponseShape', ],
        ],
        'CreateDomainGroup' => [
            'name' => 'CreateDomainGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domainGroup:create',
            ],
            'input' => [ 'shape' => 'CreateDomainGroupRequestShape', ],
            'output' => [ 'shape' => 'CreateDomainGroupResponseShape', ],
        ],
        'BatchDeleteDomainGroup' => [
            'name' => 'BatchDeleteDomainGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domainGroup:batchDelete',
            ],
            'input' => [ 'shape' => 'BatchDeleteDomainGroupRequestShape', ],
            'output' => [ 'shape' => 'BatchDeleteDomainGroupResponseShape', ],
        ],
        'GetDomainList' => [
            'name' => 'GetDomainList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain',
            ],
            'input' => [ 'shape' => 'GetDomainListRequestShape', ],
            'output' => [ 'shape' => 'GetDomainListResponseShape', ],
        ],
        'GetDomainListByFilter' => [
            'name' => 'GetDomainListByFilter',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain:query',
            ],
            'input' => [ 'shape' => 'GetDomainListByFilterRequestShape', ],
            'output' => [ 'shape' => 'GetDomainListByFilterResponseShape', ],
        ],
        'GetDomainDetail' => [
            'name' => 'GetDomainDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}',
            ],
            'input' => [ 'shape' => 'GetDomainDetailRequestShape', ],
            'output' => [ 'shape' => 'GetDomainDetailResponseShape', ],
        ],
        'CreateDomain' => [
            'name' => 'CreateDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}',
            ],
            'input' => [ 'shape' => 'CreateDomainRequestShape', ],
            'output' => [ 'shape' => 'CreateDomainResponseShape', ],
        ],
        'DeleteDomain' => [
            'name' => 'DeleteDomain',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/domain/{domain}',
            ],
            'input' => [ 'shape' => 'DeleteDomainRequestShape', ],
            'output' => [ 'shape' => 'DeleteDomainResponseShape', ],
        ],
        'StartDomain' => [
            'name' => 'StartDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}:start',
            ],
            'input' => [ 'shape' => 'StartDomainRequestShape', ],
            'output' => [ 'shape' => 'StartDomainResponseShape', ],
        ],
        'StopDomain' => [
            'name' => 'StopDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}:stop',
            ],
            'input' => [ 'shape' => 'StopDomainRequestShape', ],
            'output' => [ 'shape' => 'StopDomainResponseShape', ],
        ],
        'QueryOssBuckets' => [
            'name' => 'QueryOssBuckets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/ossBuckets',
            ],
            'input' => [ 'shape' => 'QueryOssBucketsRequestShape', ],
            'output' => [ 'shape' => 'QueryOssBucketsResponseShape', ],
        ],
        'BatchCreate' => [
            'name' => 'BatchCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain:batchCreate',
            ],
            'input' => [ 'shape' => 'BatchCreateRequestShape', ],
            'output' => [ 'shape' => 'BatchCreateResponseShape', ],
        ],
        'QueryDomainConfig' => [
            'name' => 'QueryDomainConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/config',
            ],
            'input' => [ 'shape' => 'QueryDomainConfigRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainConfigResponseShape', ],
        ],
        'QueryDomainTempInstList' => [
            'name' => 'QueryDomainTempInstList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domainTempInst:list',
            ],
            'input' => [ 'shape' => 'QueryDomainTempInstListRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainTempInstListResponseShape', ],
        ],
        'QueryDomainTempProKeys' => [
            'name' => 'QueryDomainTempProKeys',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domainTemp',
            ],
            'input' => [ 'shape' => 'QueryDomainTempProKeysRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainTempProKeysResponseShape', ],
        ],
        'ModifyDomainTempInst' => [
            'name' => 'ModifyDomainTempInst',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domainTempInst',
            ],
            'input' => [ 'shape' => 'ModifyDomainTempInstRequestShape', ],
            'output' => [ 'shape' => 'ModifyDomainTempInstResponseShape', ],
        ],
        'QueryDomainTempInst' => [
            'name' => 'QueryDomainTempInst',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domainTempInst/{instId}',
            ],
            'input' => [ 'shape' => 'QueryDomainTempInstRequestShape', ],
            'output' => [ 'shape' => 'QueryDomainTempInstResponseShape', ],
        ],
        'DelDomainTempInstance' => [
            'name' => 'DelDomainTempInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/domainTempInst/{instId}',
            ],
            'input' => [ 'shape' => 'DelDomainTempInstanceRequestShape', ],
            'output' => [ 'shape' => 'DelDomainTempInstanceResponseShape', ],
        ],
        'CheckWhetherIpBelongToJCloud' => [
            'name' => 'CheckWhetherIpBelongToJCloud',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ip:whetherBelongToJCloud',
            ],
            'input' => [ 'shape' => 'CheckWhetherIpBelongToJCloudRequestShape', ],
            'output' => [ 'shape' => 'CheckWhetherIpBelongToJCloudResponseShape', ],
        ],
        'QueryServiceIp' => [
            'name' => 'QueryServiceIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ip:queryServiceIp',
            ],
            'input' => [ 'shape' => 'QueryServiceIpRequestShape', ],
            'output' => [ 'shape' => 'QueryServiceIpResponseShape', ],
        ],
        'SetLiveDomainBackSource' => [
            'name' => 'SetLiveDomainBackSource',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain/{domain}/backSource',
            ],
            'input' => [ 'shape' => 'SetLiveDomainBackSourceRequestShape', ],
            'output' => [ 'shape' => 'SetLiveDomainBackSourceResponseShape', ],
        ],
        'SetLiveDomainIpBlackList' => [
            'name' => 'SetLiveDomainIpBlackList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain/{domain}/ipBlackList',
            ],
            'input' => [ 'shape' => 'SetLiveDomainIpBlackListRequestShape', ],
            'output' => [ 'shape' => 'SetLiveDomainIpBlackListResponseShape', ],
        ],
        'SetLiveDomainRefer' => [
            'name' => 'SetLiveDomainRefer',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain/{domain}/refer',
            ],
            'input' => [ 'shape' => 'SetLiveDomainReferRequestShape', ],
            'output' => [ 'shape' => 'SetLiveDomainReferResponseShape', ],
        ],
        'OperateLiveDomainIpBlackList' => [
            'name' => 'OperateLiveDomainIpBlackList',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain/{domain}/ipBlackList:operate',
            ],
            'input' => [ 'shape' => 'OperateLiveDomainIpBlackListRequestShape', ],
            'output' => [ 'shape' => 'OperateLiveDomainIpBlackListResponseShape', ],
        ],
        'SetLiveDomainBackSourceHost' => [
            'name' => 'SetLiveDomainBackSourceHost',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain/{domain}/backSourceHost',
            ],
            'input' => [ 'shape' => 'SetLiveDomainBackSourceHostRequestShape', ],
            'output' => [ 'shape' => 'SetLiveDomainBackSourceHostResponseShape', ],
        ],
        'SetLiveDomainAccessKey' => [
            'name' => 'SetLiveDomainAccessKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain/{domain}/accesskeyConfig',
            ],
            'input' => [ 'shape' => 'SetLiveDomainAccessKeyRequestShape', ],
            'output' => [ 'shape' => 'SetLiveDomainAccessKeyResponseShape', ],
        ],
        'SetProtocolConvert' => [
            'name' => 'SetProtocolConvert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain/{domain}/protocolConvert',
            ],
            'input' => [ 'shape' => 'SetProtocolConvertRequestShape', ],
            'output' => [ 'shape' => 'SetProtocolConvertResponseShape', ],
        ],
        'DeleteForbiddenStream' => [
            'name' => 'DeleteForbiddenStream',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain/{domain}/stream:unForbidden',
            ],
            'input' => [ 'shape' => 'DeleteForbiddenStreamRequestShape', ],
            'output' => [ 'shape' => 'DeleteForbiddenStreamResponseShape', ],
        ],
        'QueryPushDomainORAppOrStream' => [
            'name' => 'QueryPushDomainORAppOrStream',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveDomain/{domain}/stream:fuzzyQuery',
            ],
            'input' => [ 'shape' => 'QueryPushDomainORAppOrStreamRequestShape', ],
            'output' => [ 'shape' => 'QueryPushDomainORAppOrStreamResponseShape', ],
        ],
        'QueryLiveDomainIpBlackWhiteList' => [
            'name' => 'QueryLiveDomainIpBlackWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveDomain/{domain}/ipList',
            ],
            'input' => [ 'shape' => 'QueryLiveDomainIpBlackWhiteListRequestShape', ],
            'output' => [ 'shape' => 'QueryLiveDomainIpBlackWhiteListResponseShape', ],
        ],
        'BatchCreateLiveDomain' => [
            'name' => 'BatchCreateLiveDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain:batchCreate',
            ],
            'input' => [ 'shape' => 'BatchCreateLiveDomainRequestShape', ],
            'output' => [ 'shape' => 'BatchCreateLiveDomainResponseShape', ],
        ],
        'QueryLiveDomainDetail' => [
            'name' => 'QueryLiveDomainDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveDomain/{domain}',
            ],
            'input' => [ 'shape' => 'QueryLiveDomainDetailRequestShape', ],
            'output' => [ 'shape' => 'QueryLiveDomainDetailResponseShape', ],
        ],
        'QueryLiveDomainApps' => [
            'name' => 'QueryLiveDomainApps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/liveDomain/{domain}/app',
            ],
            'input' => [ 'shape' => 'QueryLiveDomainAppsRequestShape', ],
            'output' => [ 'shape' => 'QueryLiveDomainAppsResponseShape', ],
        ],
        'CreateLiveDomainPrefecthTask' => [
            'name' => 'CreateLiveDomainPrefecthTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task:createLivePrefetchTask',
            ],
            'input' => [ 'shape' => 'CreateLiveDomainPrefecthTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateLiveDomainPrefecthTaskResponseShape', ],
        ],
        'QueryLivePrefetchTask' => [
            'name' => 'QueryLivePrefetchTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task:queryLivePrefetchTask',
            ],
            'input' => [ 'shape' => 'QueryLivePrefetchTaskRequestShape', ],
            'output' => [ 'shape' => 'QueryLivePrefetchTaskResponseShape', ],
        ],
        'BatCreatePrefetchTask' => [
            'name' => 'BatCreatePrefetchTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/prefetchTask:batCreate',
            ],
            'input' => [ 'shape' => 'BatCreatePrefetchTaskRequestShape', ],
            'output' => [ 'shape' => 'BatCreatePrefetchTaskResponseShape', ],
        ],
        'UpdatePrefetchTask' => [
            'name' => 'UpdatePrefetchTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/prefetchTask:update',
            ],
            'input' => [ 'shape' => 'UpdatePrefetchTaskRequestShape', ],
            'output' => [ 'shape' => 'UpdatePrefetchTaskResponseShape', ],
        ],
        'QueryPrefetchTask' => [
            'name' => 'QueryPrefetchTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/prefetchTask:query',
            ],
            'input' => [ 'shape' => 'QueryPrefetchTaskRequestShape', ],
            'output' => [ 'shape' => 'QueryPrefetchTaskResponseShape', ],
        ],
        'StopPrefetchTask' => [
            'name' => 'StopPrefetchTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/prefetchTask:stop',
            ],
            'input' => [ 'shape' => 'StopPrefetchTaskRequestShape', ],
            'output' => [ 'shape' => 'StopPrefetchTaskResponseShape', ],
        ],
        'OperatePurgeTask' => [
            'name' => 'OperatePurgeTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/purgeTask',
            ],
            'input' => [ 'shape' => 'OperatePurgeTaskRequestShape', ],
            'output' => [ 'shape' => 'OperatePurgeTaskResponseShape', ],
        ],
        'QueryPurgeTask' => [
            'name' => 'QueryPurgeTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/purgeTask:query',
            ],
            'input' => [ 'shape' => 'QueryPurgeTaskRequestShape', ],
            'output' => [ 'shape' => 'QueryPurgeTaskResponseShape', ],
        ],
        'QueryCdnUserQuota' => [
            'name' => 'QueryCdnUserQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/user:quota',
            ],
            'input' => [ 'shape' => 'QueryCdnUserQuotaRequestShape', ],
            'output' => [ 'shape' => 'QueryCdnUserQuotaResponseShape', ],
        ],
        'QueryRefreshTaskByIds' => [
            'name' => 'QueryRefreshTaskByIds',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task:queryByIds',
            ],
            'input' => [ 'shape' => 'QueryRefreshTaskByIdsRequestShape', ],
            'output' => [ 'shape' => 'QueryRefreshTaskByIdsResponseShape', ],
        ],
        'SetRefreshLimit' => [
            'name' => 'SetRefreshLimit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task:configLimit',
            ],
            'input' => [ 'shape' => 'SetRefreshLimitRequestShape', ],
            'output' => [ 'shape' => 'SetRefreshLimitResponseShape', ],
        ],
        'QueryRefreshLimit' => [
            'name' => 'QueryRefreshLimit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task:queryLimit',
            ],
            'input' => [ 'shape' => 'QueryRefreshLimitRequestShape', ],
            'output' => [ 'shape' => 'QueryRefreshLimitResponseShape', ],
        ],
        'QueryRefreshTaskById' => [
            'name' => 'QueryRefreshTaskById',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/task/{taskId}',
            ],
            'input' => [ 'shape' => 'QueryRefreshTaskByIdRequestShape', ],
            'output' => [ 'shape' => 'QueryRefreshTaskByIdResponseShape', ],
        ],
        'CreateRefreshTaskForCallback' => [
            'name' => 'CreateRefreshTaskForCallback',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task:createForCallback',
            ],
            'input' => [ 'shape' => 'CreateRefreshTaskForCallbackRequestShape', ],
            'output' => [ 'shape' => 'CreateRefreshTaskForCallbackResponseShape', ],
        ],
        'CreateRefreshTaskForCallbackV2' => [
            'name' => 'CreateRefreshTaskForCallbackV2',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task:createForCallbackV2',
            ],
            'input' => [ 'shape' => 'CreateRefreshTaskForCallbackV2RequestShape', ],
            'output' => [ 'shape' => 'CreateRefreshTaskForCallbackV2ResponseShape', ],
        ],
        'QueryRefreshTask' => [
            'name' => 'QueryRefreshTask',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/task',
            ],
            'input' => [ 'shape' => 'QueryRefreshTaskRequestShape', ],
            'output' => [ 'shape' => 'QueryRefreshTaskResponseShape', ],
        ],
        'CreateRefreshTask' => [
            'name' => 'CreateRefreshTask',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task',
            ],
            'input' => [ 'shape' => 'CreateRefreshTaskRequestShape', ],
            'output' => [ 'shape' => 'CreateRefreshTaskResponseShape', ],
        ],
        'QueryNetProtectionRules' => [
            'name' => 'QueryNetProtectionRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/netProtectionRules',
            ],
            'input' => [ 'shape' => 'QueryNetProtectionRulesRequestShape', ],
            'output' => [ 'shape' => 'QueryNetProtectionRulesResponseShape', ],
        ],
        'SetNetProtectionRules' => [
            'name' => 'SetNetProtectionRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/netProtectionRules',
            ],
            'input' => [ 'shape' => 'SetNetProtectionRulesRequestShape', ],
            'output' => [ 'shape' => 'SetNetProtectionRulesResponseShape', ],
        ],
        'QueryNetProtectionRulesSwitch' => [
            'name' => 'QueryNetProtectionRulesSwitch',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/netProtectionSwitch',
            ],
            'input' => [ 'shape' => 'QueryNetProtectionRulesSwitchRequestShape', ],
            'output' => [ 'shape' => 'QueryNetProtectionRulesSwitchResponseShape', ],
        ],
        'SetNetProtectionRulesSwitch' => [
            'name' => 'SetNetProtectionRulesSwitch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/netProtectionSwitch',
            ],
            'input' => [ 'shape' => 'SetNetProtectionRulesSwitchRequestShape', ],
            'output' => [ 'shape' => 'SetNetProtectionRulesSwitchResponseShape', ],
        ],
        'QueryGeoAreas' => [
            'name' => 'QueryGeoAreas',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/netProtectionGeoAreas',
            ],
            'input' => [ 'shape' => 'QueryGeoAreasRequestShape', ],
            'output' => [ 'shape' => 'QueryGeoAreasResponseShape', ],
        ],
        'QueryAttackTypeCount' => [
            'name' => 'QueryAttackTypeCount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/netProtectionData:attackTypeCount',
            ],
            'input' => [ 'shape' => 'QueryAttackTypeCountRequestShape', ],
            'output' => [ 'shape' => 'QueryAttackTypeCountResponseShape', ],
        ],
        'QueryDdosGraph' => [
            'name' => 'QueryDdosGraph',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/netProtectionData:ddosGraph',
            ],
            'input' => [ 'shape' => 'QueryDdosGraphRequestShape', ],
            'output' => [ 'shape' => 'QueryDdosGraphResponseShape', ],
        ],
        'SearchAttackLog' => [
            'name' => 'SearchAttackLog',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/netProtectionData:attackLog',
            ],
            'input' => [ 'shape' => 'SearchAttackLogRequestShape', ],
            'output' => [ 'shape' => 'SearchAttackLogResponseShape', ],
        ],
        'GetAllUpperNodeIpList' => [
            'name' => 'GetAllUpperNodeIpList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/serviceNode:getAllUpperNodeIpList',
            ],
            'input' => [ 'shape' => 'GetAllUpperNodeIpListRequestShape', ],
            'output' => [ 'shape' => 'GetAllUpperNodeIpListResponseShape', ],
        ],
        'ConfigServiceNotice' => [
            'name' => 'ConfigServiceNotice',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/serviceNotice:config',
            ],
            'input' => [ 'shape' => 'ConfigServiceNoticeRequestShape', ],
            'output' => [ 'shape' => 'ConfigServiceNoticeResponseShape', ],
        ],
        'QueryServiceNotice' => [
            'name' => 'QueryServiceNotice',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/serviceNotice',
            ],
            'input' => [ 'shape' => 'QueryServiceNoticeRequestShape', ],
            'output' => [ 'shape' => 'QueryServiceNoticeResponseShape', ],
        ],
        'GetSslCertList' => [
            'name' => 'GetSslCertList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/sslCert',
            ],
            'input' => [ 'shape' => 'GetSslCertListRequestShape', ],
            'output' => [ 'shape' => 'GetSslCertListResponseShape', ],
        ],
        'GetSslCertDetail' => [
            'name' => 'GetSslCertDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/sslCert/{sslCertId}',
            ],
            'input' => [ 'shape' => 'GetSslCertDetailRequestShape', ],
            'output' => [ 'shape' => 'GetSslCertDetailResponseShape', ],
        ],
        'UploadCert' => [
            'name' => 'UploadCert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/sslCert:upload',
            ],
            'input' => [ 'shape' => 'UploadCertRequestShape', ],
            'output' => [ 'shape' => 'UploadCertResponseShape', ],
        ],
        'QueryMixStatisticsData' => [
            'name' => 'QueryMixStatisticsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics',
            ],
            'input' => [ 'shape' => 'QueryMixStatisticsDataRequestShape', ],
            'output' => [ 'shape' => 'QueryMixStatisticsDataResponseShape', ],
        ],
        'QueryMixStatisticsWithAreaData' => [
            'name' => 'QueryMixStatisticsWithAreaData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:groupByArea',
            ],
            'input' => [ 'shape' => 'QueryMixStatisticsWithAreaDataRequestShape', ],
            'output' => [ 'shape' => 'QueryMixStatisticsWithAreaDataResponseShape', ],
        ],
        'QueryMixTrafficGroupSum' => [
            'name' => 'QueryMixTrafficGroupSum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:groupSum',
            ],
            'input' => [ 'shape' => 'QueryMixTrafficGroupSumRequestShape', ],
            'output' => [ 'shape' => 'QueryMixTrafficGroupSumResponseShape', ],
        ],
        'QueryStatisticsData' => [
            'name' => 'QueryStatisticsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vodStatistics',
            ],
            'input' => [ 'shape' => 'QueryStatisticsDataRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsDataResponseShape', ],
        ],
        'QueryStatisticsDataGroupByArea' => [
            'name' => 'QueryStatisticsDataGroupByArea',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vodStatistics:groupByArea',
            ],
            'input' => [ 'shape' => 'QueryStatisticsDataGroupByAreaRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsDataGroupByAreaResponseShape', ],
        ],
        'QueryStatisticsDataGroupSum' => [
            'name' => 'QueryStatisticsDataGroupSum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/vodStatistics:groupSum',
            ],
            'input' => [ 'shape' => 'QueryStatisticsDataGroupSumRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsDataGroupSumResponseShape', ],
        ],
        'QueryLiveStatisticsData' => [
            'name' => 'QueryLiveStatisticsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveStatistics',
            ],
            'input' => [ 'shape' => 'QueryLiveStatisticsDataRequestShape', ],
            'output' => [ 'shape' => 'QueryLiveStatisticsDataResponseShape', ],
        ],
        'QueryLiveStatisticsAreaDataGroupBy' => [
            'name' => 'QueryLiveStatisticsAreaDataGroupBy',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveStatistics:groupByArea',
            ],
            'input' => [ 'shape' => 'QueryLiveStatisticsAreaDataGroupByRequestShape', ],
            'output' => [ 'shape' => 'QueryLiveStatisticsAreaDataGroupByResponseShape', ],
        ],
        'QueryLiveTrafficGroupSum' => [
            'name' => 'QueryLiveTrafficGroupSum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveStatistics:groupSum',
            ],
            'input' => [ 'shape' => 'QueryLiveTrafficGroupSumRequestShape', ],
            'output' => [ 'shape' => 'QueryLiveTrafficGroupSumResponseShape', ],
        ],
        'QueryStatisticsTopIp' => [
            'name' => 'QueryStatisticsTopIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:topIp',
            ],
            'input' => [ 'shape' => 'QueryStatisticsTopIpRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsTopIpResponseShape', ],
        ],
        'QueryStatisticsTopUrl' => [
            'name' => 'QueryStatisticsTopUrl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:topUrl',
            ],
            'input' => [ 'shape' => 'QueryStatisticsTopUrlRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsTopUrlResponseShape', ],
        ],
        'QueryDirBandwidth' => [
            'name' => 'QueryDirBandwidth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:queryDirBandwidth',
            ],
            'input' => [ 'shape' => 'QueryDirBandwidthRequestShape', ],
            'output' => [ 'shape' => 'QueryDirBandwidthResponseShape', ],
        ],
        'QueryDirStatsData' => [
            'name' => 'QueryDirStatsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:queryDirStatsData',
            ],
            'input' => [ 'shape' => 'QueryDirStatsDataRequestShape', ],
            'output' => [ 'shape' => 'QueryDirStatsDataResponseShape', ],
        ],
        'QueryCustomizedDirBandWidth' => [
            'name' => 'QueryCustomizedDirBandWidth',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:queryCustomizedDirBandWidth',
            ],
            'input' => [ 'shape' => 'QueryCustomizedDirBandWidthRequestShape', ],
            'output' => [ 'shape' => 'QueryCustomizedDirBandWidthResponseShape', ],
        ],
        'QueryStreamInfo' => [
            'name' => 'QueryStreamInfo',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/liveStatistics:streamInfo',
            ],
            'input' => [ 'shape' => 'QueryStreamInfoRequestShape', ],
            'output' => [ 'shape' => 'QueryStreamInfoResponseShape', ],
        ],
        'QueryAvgBandwidthForPCdn' => [
            'name' => 'QueryAvgBandwidthForPCdn',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/pcdn:queryAvgBandwidth',
            ],
            'input' => [ 'shape' => 'QueryAvgBandwidthForPCdnRequestShape', ],
            'output' => [ 'shape' => 'QueryAvgBandwidthForPCdnResponseShape', ],
        ],
        'QueryDeviceStatusForPCdn' => [
            'name' => 'QueryDeviceStatusForPCdn',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/pcdn:queryDeviceStatus',
            ],
            'input' => [ 'shape' => 'QueryDeviceStatusForPCdnRequestShape', ],
            'output' => [ 'shape' => 'QueryDeviceStatusForPCdnResponseShape', ],
        ],
        'QueryJDBoxStatisticsData' => [
            'name' => 'QueryJDBoxStatisticsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/jdBoxStatistics',
            ],
            'input' => [ 'shape' => 'QueryJDBoxStatisticsDataRequestShape', ],
            'output' => [ 'shape' => 'QueryJDBoxStatisticsDataResponseShape', ],
        ],
        'QueryJDBoxStatisticsDataWithGroup' => [
            'name' => 'QueryJDBoxStatisticsDataWithGroup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/jdBoxStatisticsWithGroup',
            ],
            'input' => [ 'shape' => 'QueryJDBoxStatisticsDataWithGroupRequestShape', ],
            'output' => [ 'shape' => 'QueryJDBoxStatisticsDataWithGroupResponseShape', ],
        ],
        'QueryJBoxAvgBandwidth' => [
            'name' => 'QueryJBoxAvgBandwidth',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/jdbox:queryAvgBandwidth',
            ],
            'input' => [ 'shape' => 'QueryJBoxAvgBandwidthRequestShape', ],
            'output' => [ 'shape' => 'QueryJBoxAvgBandwidthResponseShape', ],
        ],
        'QueryWafSwitch' => [
            'name' => 'QueryWafSwitch',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/wafSwitch',
            ],
            'input' => [ 'shape' => 'QueryWafSwitchRequestShape', ],
            'output' => [ 'shape' => 'QueryWafSwitchResponseShape', ],
        ],
        'SetWafSwitch' => [
            'name' => 'SetWafSwitch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafSwitch',
            ],
            'input' => [ 'shape' => 'SetWafSwitchRequestShape', ],
            'output' => [ 'shape' => 'SetWafSwitchResponseShape', ],
        ],
        'QueryWafWhiteRuleSwitch' => [
            'name' => 'QueryWafWhiteRuleSwitch',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/wafWhiteRuleSwitch',
            ],
            'input' => [ 'shape' => 'QueryWafWhiteRuleSwitchRequestShape', ],
            'output' => [ 'shape' => 'QueryWafWhiteRuleSwitchResponseShape', ],
        ],
        'SetWafWhiteRuleSwitch' => [
            'name' => 'SetWafWhiteRuleSwitch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafWhiteRuleSwitch',
            ],
            'input' => [ 'shape' => 'SetWafWhiteRuleSwitchRequestShape', ],
            'output' => [ 'shape' => 'SetWafWhiteRuleSwitchResponseShape', ],
        ],
        'QuerywafWhiteRules' => [
            'name' => 'QuerywafWhiteRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/wafWhiteRules',
            ],
            'input' => [ 'shape' => 'QuerywafWhiteRulesRequestShape', ],
            'output' => [ 'shape' => 'QuerywafWhiteRulesResponseShape', ],
        ],
        'CreateWafWhiteRule' => [
            'name' => 'CreateWafWhiteRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafWhiteRule',
            ],
            'input' => [ 'shape' => 'CreateWafWhiteRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateWafWhiteRuleResponseShape', ],
        ],
        'UpdateWafWhiteRule' => [
            'name' => 'UpdateWafWhiteRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafWhiteRule/{id}',
            ],
            'input' => [ 'shape' => 'UpdateWafWhiteRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdateWafWhiteRuleResponseShape', ],
        ],
        'EnableWafWhiteRules' => [
            'name' => 'EnableWafWhiteRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafWhiteRule:enable',
            ],
            'input' => [ 'shape' => 'EnableWafWhiteRulesRequestShape', ],
            'output' => [ 'shape' => 'EnableWafWhiteRulesResponseShape', ],
        ],
        'DisableWafWhiteRules' => [
            'name' => 'DisableWafWhiteRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafWhiteRule:disable',
            ],
            'input' => [ 'shape' => 'DisableWafWhiteRulesRequestShape', ],
            'output' => [ 'shape' => 'DisableWafWhiteRulesResponseShape', ],
        ],
        'DeleteWafWhiteRules' => [
            'name' => 'DeleteWafWhiteRules',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/domain/{domain}/wafWhiteRule/{ids}',
            ],
            'input' => [ 'shape' => 'DeleteWafWhiteRulesRequestShape', ],
            'output' => [ 'shape' => 'DeleteWafWhiteRulesResponseShape', ],
        ],
        'QueryWafBlackRuleSwitch' => [
            'name' => 'QueryWafBlackRuleSwitch',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/wafBlackRuleSwitch',
            ],
            'input' => [ 'shape' => 'QueryWafBlackRuleSwitchRequestShape', ],
            'output' => [ 'shape' => 'QueryWafBlackRuleSwitchResponseShape', ],
        ],
        'SetWafBlackRuleSwitch' => [
            'name' => 'SetWafBlackRuleSwitch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafBlackRuleSwitch',
            ],
            'input' => [ 'shape' => 'SetWafBlackRuleSwitchRequestShape', ],
            'output' => [ 'shape' => 'SetWafBlackRuleSwitchResponseShape', ],
        ],
        'QuerywafBlackRules' => [
            'name' => 'QuerywafBlackRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/wafBlackRules',
            ],
            'input' => [ 'shape' => 'QuerywafBlackRulesRequestShape', ],
            'output' => [ 'shape' => 'QuerywafBlackRulesResponseShape', ],
        ],
        'CreateWafBlackRule' => [
            'name' => 'CreateWafBlackRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafBlackRule',
            ],
            'input' => [ 'shape' => 'CreateWafBlackRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateWafBlackRuleResponseShape', ],
        ],
        'UpdateWafBlackRule' => [
            'name' => 'UpdateWafBlackRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafBlackRule/{id}',
            ],
            'input' => [ 'shape' => 'UpdateWafBlackRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdateWafBlackRuleResponseShape', ],
        ],
        'EnableWafBlackRules' => [
            'name' => 'EnableWafBlackRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafBlackRule:enable',
            ],
            'input' => [ 'shape' => 'EnableWafBlackRulesRequestShape', ],
            'output' => [ 'shape' => 'EnableWafBlackRulesResponseShape', ],
        ],
        'DisableWafBlackRules' => [
            'name' => 'DisableWafBlackRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafBlackRule:disable',
            ],
            'input' => [ 'shape' => 'DisableWafBlackRulesRequestShape', ],
            'output' => [ 'shape' => 'DisableWafBlackRulesResponseShape', ],
        ],
        'DeleteWafBlackRules' => [
            'name' => 'DeleteWafBlackRules',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/domain/{domain}/wafBlackRule/{ids}',
            ],
            'input' => [ 'shape' => 'DeleteWafBlackRulesRequestShape', ],
            'output' => [ 'shape' => 'DeleteWafBlackRulesResponseShape', ],
        ],
        'QueryCCProtectSwitch' => [
            'name' => 'QueryCCProtectSwitch',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/ccProtectSwitch',
            ],
            'input' => [ 'shape' => 'QueryCCProtectSwitchRequestShape', ],
            'output' => [ 'shape' => 'QueryCCProtectSwitchResponseShape', ],
        ],
        'SetCCProtectSwitch' => [
            'name' => 'SetCCProtectSwitch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/ccProtectSwitch',
            ],
            'input' => [ 'shape' => 'SetCCProtectSwitchRequestShape', ],
            'output' => [ 'shape' => 'SetCCProtectSwitchResponseShape', ],
        ],
        'QueryCCProtectRules' => [
            'name' => 'QueryCCProtectRules',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/ccProtectRules',
            ],
            'input' => [ 'shape' => 'QueryCCProtectRulesRequestShape', ],
            'output' => [ 'shape' => 'QueryCCProtectRulesResponseShape', ],
        ],
        'CreateCCProtectRule' => [
            'name' => 'CreateCCProtectRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/ccProtectRule',
            ],
            'input' => [ 'shape' => 'CreateCCProtectRuleRequestShape', ],
            'output' => [ 'shape' => 'CreateCCProtectRuleResponseShape', ],
        ],
        'UpdateCCProtectRule' => [
            'name' => 'UpdateCCProtectRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/ccProtectRule/{id}',
            ],
            'input' => [ 'shape' => 'UpdateCCProtectRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdateCCProtectRuleResponseShape', ],
        ],
        'EnableCCProtectRule' => [
            'name' => 'EnableCCProtectRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/ccProtectRule:enable',
            ],
            'input' => [ 'shape' => 'EnableCCProtectRuleRequestShape', ],
            'output' => [ 'shape' => 'EnableCCProtectRuleResponseShape', ],
        ],
        'DisableCCProtectRule' => [
            'name' => 'DisableCCProtectRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/ccProtectRule:disable',
            ],
            'input' => [ 'shape' => 'DisableCCProtectRuleRequestShape', ],
            'output' => [ 'shape' => 'DisableCCProtectRuleResponseShape', ],
        ],
        'DeleteCCProtectRule' => [
            'name' => 'DeleteCCProtectRule',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/domain/{domain}/ccProtectRule/{ids}',
            ],
            'input' => [ 'shape' => 'DeleteCCProtectRuleRequestShape', ],
            'output' => [ 'shape' => 'DeleteCCProtectRuleResponseShape', ],
        ],
        'QueryWebProtectSwitch' => [
            'name' => 'QueryWebProtectSwitch',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/wafWebProtectSwitch',
            ],
            'input' => [ 'shape' => 'QueryWebProtectSwitchRequestShape', ],
            'output' => [ 'shape' => 'QueryWebProtectSwitchResponseShape', ],
        ],
        'SetWebProtectSwitch' => [
            'name' => 'SetWebProtectSwitch',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafWebProtectSwitch',
            ],
            'input' => [ 'shape' => 'SetWebProtectSwitchRequestShape', ],
            'output' => [ 'shape' => 'SetWebProtectSwitchResponseShape', ],
        ],
        'QueryWebProtectSettings' => [
            'name' => 'QueryWebProtectSettings',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/wafWebProtectSettings',
            ],
            'input' => [ 'shape' => 'QueryWebProtectSettingsRequestShape', ],
            'output' => [ 'shape' => 'QueryWebProtectSettingsResponseShape', ],
        ],
        'UpdateWebProtectSettings' => [
            'name' => 'UpdateWebProtectSettings',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/domain/{domain}/wafWebProtectSettings',
            ],
            'input' => [ 'shape' => 'UpdateWebProtectSettingsRequestShape', ],
            'output' => [ 'shape' => 'UpdateWebProtectSettingsResponseShape', ],
        ],
        'QueryWafRegions' => [
            'name' => 'QueryWafRegions',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/wafRegions',
            ],
            'input' => [ 'shape' => 'QueryWafRegionsRequestShape', ],
            'output' => [ 'shape' => 'QueryWafRegionsResponseShape', ],
        ],
        'QueryIpBlackSettingStatus' => [
            'name' => 'QueryIpBlackSettingStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/domain/{domain}/wafIpBlackSettingStatus',
            ],
            'input' => [ 'shape' => 'QueryIpBlackSettingStatusRequestShape', ],
            'output' => [ 'shape' => 'QueryIpBlackSettingStatusResponseShape', ],
        ],
        'WafQueryPvForAreaAndIp' => [
            'name' => 'WafQueryPvForAreaAndIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/wafPvForAreaAndIp',
            ],
            'input' => [ 'shape' => 'WafQueryPvForAreaAndIpRequestShape', ],
            'output' => [ 'shape' => 'WafQueryPvForAreaAndIpResponseShape', ],
        ],
        'WafQueryPv' => [
            'name' => 'WafQueryPv',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/wafPvStatistic',
            ],
            'input' => [ 'shape' => 'WafQueryPvRequestShape', ],
            'output' => [ 'shape' => 'WafQueryPvResponseShape', ],
        ],
        'WafQueryAttackDetails' => [
            'name' => 'WafQueryAttackDetails',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/wafAttackDetails',
            ],
            'input' => [ 'shape' => 'WafQueryAttackDetailsRequestShape', ],
            'output' => [ 'shape' => 'WafQueryAttackDetailsResponseShape', ],
        ],
    ],
    'shapes' => [
    ],
];
