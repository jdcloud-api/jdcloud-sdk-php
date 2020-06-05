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
        'CheckWhetherIpBelongToJCloud' => [
            'name' => 'CheckWhetherIpBelongToJCloud',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/ip:whetherBelongToJCloud',
            ],
            'input' => [ 'shape' => 'CheckWhetherIpBelongToJCloudRequestShape', ],
            'output' => [ 'shape' => 'CheckWhetherIpBelongToJCloudResponseShape', ],
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
        'QueryRefreshTaskByIds' => [
            'name' => 'QueryRefreshTaskByIds',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/task:queryByIds',
            ],
            'input' => [ 'shape' => 'QueryRefreshTaskByIdsRequestShape', ],
            'output' => [ 'shape' => 'QueryRefreshTaskByIdsResponseShape', ],
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
        'DomainLog' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'interval' => [ 'type' => 'string', 'locationName' => 'interval', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'lastModified' => [ 'type' => 'string', 'locationName' => 'lastModified', ],
            ],
        ],
        'DomainsLog' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'domainLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainLog', ], ],
            ],
        ],
        'BandTrafficWithAreaDataItem' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainBandAreaTrafficDataItem', ], ],
            ],
        ],
        'DomainBandTrafficDataItem' => [
            'type' => 'structure',
            'members' => [
                'startTimeStamp' => [ 'type' => 'string', 'locationName' => 'startTimeStamp', ],
                'endTimeStamp' => [ 'type' => 'string', 'locationName' => 'endTimeStamp', ],
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
            ],
        ],
        'DomainBandAreaTrafficDataItem' => [
            'type' => 'structure',
            'members' => [
                'startTimeStamp' => [ 'type' => 'string', 'locationName' => 'startTimeStamp', ],
                'endTimeStamp' => [ 'type' => 'string', 'locationName' => 'endTimeStamp', ],
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
            ],
        ],
        'BandTrafficDataItem' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainBandTrafficDataItem', ], ],
            ],
        ],
        'OriflowTopItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'oriflow' => [ 'type' => 'double', 'locationName' => 'oriflow', ],
                'hitflow' => [ 'type' => 'double', 'locationName' => 'hitflow', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'flowPercent' => [ 'type' => 'string', 'locationName' => 'flowPercent', ],
            ],
        ],
        'StreamTableItem' => [
            'type' => 'structure',
            'members' => [
                'topTimeStamp' => [ 'type' => 'long', 'locationName' => 'topTimeStamp', ],
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
            ],
        ],
        'TopNRespItem' => [
            'type' => 'structure',
            'members' => [
                'topKey' => [ 'type' => 'string', 'locationName' => 'topKey', ],
                'topValue' => [ 'type' => 'object', 'locationName' => 'topValue', ],
                'topDataValue' => [ 'type' => 'double', 'locationName' => 'topDataValue', ],
                'topDataPercent' => [ 'type' => 'string', 'locationName' => 'topDataPercent', ],
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopNRespItemDetail', ], ],
            ],
        ],
        'TopUrlItem' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'flowUnit' => [ 'type' => 'string', 'locationName' => 'flowUnit', ],
                'flowPercent' => [ 'type' => 'string', 'locationName' => 'flowPercent', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'pvUnit' => [ 'type' => 'string', 'locationName' => 'pvUnit', ],
                'pvPercent' => [ 'type' => 'string', 'locationName' => 'pvPercent', ],
                'uv' => [ 'type' => 'long', 'locationName' => 'uv', ],
                'uvUnit' => [ 'type' => 'string', 'locationName' => 'uvUnit', ],
                'uvPercent' => [ 'type' => 'string', 'locationName' => 'uvPercent', ],
            ],
        ],
        'TopNRespItemDetail' => [
            'type' => 'structure',
            'members' => [
                'timeStamp' => [ 'type' => 'long', 'locationName' => 'timeStamp', ],
                'data' => [ 'type' => 'double', 'locationName' => 'data', ],
            ],
        ],
        'CodeTypeItem' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'percent' => [ 'type' => 'string', 'locationName' => 'percent', ],
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'CodeTypeDetailItem', ], ],
            ],
        ],
        'AvgspeedItem' => [
            'type' => 'structure',
            'members' => [
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'avgspeed' => [ 'type' => 'double', 'locationName' => 'avgspeed', ],
                'avgspeedUnit' => [ 'type' => 'string', 'locationName' => 'avgspeedUnit', ],
                'firstpkgtime' => [ 'type' => 'double', 'locationName' => 'firstpkgtime', ],
                'firstpkgtimeUnit' => [ 'type' => 'string', 'locationName' => 'firstpkgtimeUnit', ],
                'errorRatio' => [ 'type' => 'double', 'locationName' => 'errorRatio', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'flowUnit' => [ 'type' => 'string', 'locationName' => 'flowUnit', ],
                'flowPercent' => [ 'type' => 'double', 'locationName' => 'flowPercent', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'hitRatio' => [ 'type' => 'double', 'locationName' => 'hitRatio', ],
            ],
        ],
        'HitRatioDiagramItem' => [
            'type' => 'structure',
            'members' => [
                'flowRatio' => [ 'type' => 'double', 'locationName' => 'flowRatio', ],
                'reqRatio' => [ 'type' => 'double', 'locationName' => 'reqRatio', ],
                'timeStamp' => [ 'type' => 'long', 'locationName' => 'timeStamp', ],
            ],
        ],
        'AreaIspbdwItem' => [
            'type' => 'structure',
            'members' => [
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'flowPercent' => [ 'type' => 'string', 'locationName' => 'flowPercent', ],
                'pvPercent' => [ 'type' => 'string', 'locationName' => 'pvPercent', ],
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'topTimeStamp' => [ 'type' => 'long', 'locationName' => 'topTimeStamp', ],
            ],
        ],
        'OverviewTrafficTotal' => [
            'type' => 'structure',
            'members' => [
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'topTimeStamp' => [ 'type' => 'long', 'locationName' => 'topTimeStamp', ],
            ],
        ],
        'OridbwTableItem' => [
            'type' => 'structure',
            'members' => [
                'groupByname' => [ 'type' => 'string', 'locationName' => 'groupByname', ],
                'domainTyep' => [ 'type' => 'string', 'locationName' => 'domainTyep', ],
                'oriflowPercent' => [ 'type' => 'string', 'locationName' => 'oriflowPercent', ],
                'oripvPercent' => [ 'type' => 'string', 'locationName' => 'oripvPercent', ],
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
                'avgoribandwidth' => [ 'type' => 'double', 'locationName' => 'avgoribandwidth', ],
                'oriTopTimeStamp' => [ 'type' => 'long', 'locationName' => 'oriTopTimeStamp', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'oripv' => [ 'type' => 'long', 'locationName' => 'oripv', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'oriflow' => [ 'type' => 'double', 'locationName' => 'oriflow', ],
            ],
        ],
        'PushStreamInfoItem' => [
            'type' => 'structure',
            'members' => [
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
                'nodeIp' => [ 'type' => 'string', 'locationName' => 'nodeIp', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'duration' => [ 'type' => 'long', 'locationName' => 'duration', ],
            ],
        ],
        'OverviewTrafficItem' => [
            'type' => 'structure',
            'members' => [
                'avgbandwidth' => [ 'type' => 'long', 'locationName' => 'avgbandwidth', ],
                'flow' => [ 'type' => 'long', 'locationName' => 'flow', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'maxavgbandwidthtime' => [ 'type' => 'string', 'locationName' => 'maxavgbandwidthtime', ],
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'OverviewTrafficDetailItem', ], ],
            ],
        ],
        'DomainbdwItem' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'domainType' => [ 'type' => 'string', 'locationName' => 'domainType', ],
                'topTimeStamp' => [ 'type' => 'long', 'locationName' => 'topTimeStamp', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
            ],
        ],
        'StreamDiagramItem' => [
            'type' => 'structure',
            'members' => [
                'timeStamp' => [ 'type' => 'long', 'locationName' => 'timeStamp', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'CodeTypeDetailItem' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
                'count' => [ 'type' => 'long', 'locationName' => 'count', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'percent' => [ 'type' => 'string', 'locationName' => 'percent', ],
            ],
        ],
        'CodeDetailItem' => [
            'type' => 'structure',
            'members' => [
                'timeStamp' => [ 'type' => 'long', 'locationName' => 'timeStamp', ],
                'ok' => [ 'type' => 'double', 'locationName' => 'ok', ],
                'badGateway' => [ 'type' => 'double', 'locationName' => 'badGateway', ],
                'badRequest' => [ 'type' => 'double', 'locationName' => 'badRequest', ],
                'forbidden' => [ 'type' => 'double', 'locationName' => 'forbidden', ],
                'found' => [ 'type' => 'double', 'locationName' => 'found', ],
                'gatewayTimeout' => [ 'type' => 'double', 'locationName' => 'gatewayTimeout', ],
                'internalServerError' => [ 'type' => 'double', 'locationName' => 'internalServerError', ],
                'movedPermanently' => [ 'type' => 'double', 'locationName' => 'movedPermanently', ],
                'notFound' => [ 'type' => 'double', 'locationName' => 'notFound', ],
                'notModified' => [ 'type' => 'double', 'locationName' => 'notModified', ],
                'partialContent' => [ 'type' => 'double', 'locationName' => 'partialContent', ],
                'requestedRangeNotSuitable' => [ 'type' => 'double', 'locationName' => 'requestedRangeNotSuitable', ],
                'other' => [ 'type' => 'double', 'locationName' => 'other', ],
                'serviceUnavailable' => [ 'type' => 'double', 'locationName' => 'serviceUnavailable', ],
            ],
        ],
        'OripvTopItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'hitpv' => [ 'type' => 'long', 'locationName' => 'hitpv', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'oripv' => [ 'type' => 'long', 'locationName' => 'oripv', ],
                'oripvPercent' => [ 'type' => 'string', 'locationName' => 'oripvPercent', ],
            ],
        ],
        'HitrationTableItem' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'domainType' => [ 'type' => 'string', 'locationName' => 'domainType', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'hitPv' => [ 'type' => 'long', 'locationName' => 'hitPv', ],
                'oriPV' => [ 'type' => 'long', 'locationName' => 'oriPV', ],
                'hitRatio' => [ 'type' => 'string', 'locationName' => 'hitRatio', ],
            ],
        ],
        'OriBandwithDetailItem' => [
            'type' => 'structure',
            'members' => [
                'timeStamp' => [ 'type' => 'long', 'locationName' => 'timeStamp', ],
                'avgoribandwidth' => [ 'type' => 'double', 'locationName' => 'avgoribandwidth', ],
            ],
        ],
        'TotalDetalItem' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
                'oriData' => [ 'type' => 'object', 'locationName' => 'oriData', ],
                'timeStamp' => [ 'type' => 'long', 'locationName' => 'timeStamp', ],
            ],
        ],
        'OriDiagramItem' => [
            'type' => 'structure',
            'members' => [
                'oriRatio' => [ 'type' => 'string', 'locationName' => 'oriRatio', ],
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
                'avgoribandwidth' => [ 'type' => 'double', 'locationName' => 'avgoribandwidth', ],
                'timeStamp' => [ 'type' => 'long', 'locationName' => 'timeStamp', ],
            ],
        ],
        'OnlineStreamInfo' => [
            'type' => 'structure',
            'members' => [
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'clientIp' => [ 'type' => 'string', 'locationName' => 'clientIp', ],
                'serverIp' => [ 'type' => 'string', 'locationName' => 'serverIp', ],
                'frameRate' => [ 'type' => 'double', 'locationName' => 'frameRate', ],
                'frameLossRate' => [ 'type' => 'double', 'locationName' => 'frameLossRate', ],
                'lastActive' => [ 'type' => 'long', 'locationName' => 'lastActive', ],
                'realFps' => [ 'type' => 'double', 'locationName' => 'realFps', ],
                'uploadSpeed' => [ 'type' => 'long', 'locationName' => 'uploadSpeed', ],
                'videoCodecId' => [ 'type' => 'long', 'locationName' => 'videoCodecId', ],
                'videoDataRate' => [ 'type' => 'long', 'locationName' => 'videoDataRate', ],
                'audioCodecId' => [ 'type' => 'long', 'locationName' => 'audioCodecId', ],
            ],
        ],
        'OverviewTrafficDetailItem' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'long', 'locationName' => 'data', ],
                'timeStamp' => [ 'type' => 'string', 'locationName' => 'timeStamp', ],
            ],
        ],
        'OribandwidthTopItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'total' => [ 'type' => 'double', 'locationName' => 'total', ],
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'OriBandwithDetailItem', ], ],
            ],
        ],
        'AreaIspbdwDetailItem' => [
            'type' => 'structure',
            'members' => [
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'flowPercent' => [ 'type' => 'string', 'locationName' => 'flowPercent', ],
                'pvPercent' => [ 'type' => 'string', 'locationName' => 'pvPercent', ],
                'avgbandwidth' => [ 'type' => 'double', 'locationName' => 'avgbandwidth', ],
                'flow' => [ 'type' => 'double', 'locationName' => 'flow', ],
                'pv' => [ 'type' => 'long', 'locationName' => 'pv', ],
                'topTimeStamp' => [ 'type' => 'long', 'locationName' => 'topTimeStamp', ],
            ],
        ],
        'AreaIspItem' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'code' => [ 'type' => 'string', 'locationName' => 'code', ],
            ],
        ],
        'SnowLeopardIpSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'master' => [ 'type' => 'integer', 'locationName' => 'master', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'ratio' => [ 'type' => 'double', 'locationName' => 'ratio', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
            ],
        ],
        'ErrorEntity' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'msg' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteStream' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'publishIp' => [ 'type' => 'string', 'locationName' => 'publishIp', ],
            ],
        ],
        'SimpleGroupItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'ExtraCacheTime' => [
            'type' => 'structure',
            'members' => [
                'httpCode' => [ 'type' => 'string', 'locationName' => 'httpCode', ],
                'cacheTime' => [ 'type' => 'long', 'locationName' => 'cacheTime', ],
            ],
        ],
        'QueryHttpHeaderResp' => [
            'type' => 'structure',
            'members' => [
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
                'headerOp' => [ 'type' => 'string', 'locationName' => 'headerOp', ],
            ],
        ],
        'UrlTask' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ListDomainItemByFilter' => [
            'type' => 'structure',
            'members' => [
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'wafStatus' => [ 'type' => 'string', 'locationName' => 'wafStatus', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'RelatedDomains' => [
            'type' => 'structure',
            'members' => [
                'domainName' => [ 'type' => 'string', 'locationName' => 'domainName', ],
                'domainType' => [ 'type' => 'string', 'locationName' => 'domainType', ],
                'rtmpUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'flvUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hlsUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Domain' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'BackSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSourceInfo', ], ],
                'domain' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainSourceInfo', ], ],
                'ossSource' => [ 'type' => 'string', 'locationName' => 'ossSource', ],
            ],
        ],
        'ListDomainItem' => [
            'type' => 'structure',
            'members' => [
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'wafStatus' => [ 'type' => 'string', 'locationName' => 'wafStatus', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
            ],
        ],
        'DomainSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'sourceHost' => [ 'type' => 'string', 'locationName' => 'sourceHost', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SnowLeopardDomainSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'sourceHost' => [ 'type' => 'string', 'locationName' => 'sourceHost', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'ForbiddenStreamHistoryItem' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'publishIp' => [ 'type' => 'string', 'locationName' => 'publishIp', ],
                'forbiddenType' => [ 'type' => 'string', 'locationName' => 'forbiddenType', ],
                'ttl' => [ 'type' => 'long', 'locationName' => 'ttl', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'forbiddenTypeDesc' => [ 'type' => 'string', 'locationName' => 'forbiddenTypeDesc', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SnowLeopardBackSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnowLeopardIpSourceInfo', ], ],
                'domain' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnowLeopardDomainSourceInfo', ], ],
                'ossSource' => [ 'type' => 'string', 'locationName' => 'ossSource', ],
            ],
        ],
        'CacheRule' => [
            'type' => 'structure',
            'members' => [
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'ttl' => [ 'type' => 'long', 'locationName' => 'ttl', ],
                'contents' => [ 'type' => 'string', 'locationName' => 'contents', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'cacheType' => [ 'type' => 'string', 'locationName' => 'cacheType', ],
            ],
        ],
        'ForbiddenStream' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'publishIp' => [ 'type' => 'string', 'locationName' => 'publishIp', ],
                'forbiddenType' => [ 'type' => 'string', 'locationName' => 'forbiddenType', ],
                'ttl' => [ 'type' => 'long', 'locationName' => 'ttl', ],
                'forbiddenTypeDesc' => [ 'type' => 'string', 'locationName' => 'forbiddenTypeDesc', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'UrlItemV2' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'urlId' => [ 'type' => 'string', 'locationName' => 'urlId', ],
                'callbackUrl' => [ 'type' => 'string', 'locationName' => 'callbackUrl', ],
            ],
        ],
        'ProtocolConvert' => [
            'type' => 'structure',
            'members' => [
                'sourceProtocol' => [ 'type' => 'string', 'locationName' => 'sourceProtocol', ],
                'targetProtocol' => [ 'type' => 'string', 'locationName' => 'targetProtocol', ],
            ],
        ],
        'SetSourceBody' => [
            'type' => 'structure',
            'members' => [
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'ipSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSourceInfo', ], ],
                'domainSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainSourceInfo', ], ],
                'ossSource' => [ 'type' => 'string', 'locationName' => 'ossSource', ],
                'defaultSourceHost' => [ 'type' => 'string', 'locationName' => 'defaultSourceHost', ],
            ],
        ],
        'UrlItem' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'urlId' => [ 'type' => 'long', 'locationName' => 'urlId', ],
            ],
        ],
        'FeeDomain' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'feeType' => [ 'type' => 'integer', 'locationName' => 'feeType', ],
            ],
        ],
        'RefreshTask' => [
            'type' => 'structure',
            'members' => [
                'createDate' => [ 'type' => 'string', 'locationName' => 'createDate', ],
                'failed' => [ 'type' => 'float', 'locationName' => 'failed', ],
                'success' => [ 'type' => 'float', 'locationName' => 'success', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
                'retryStatus' => [ 'type' => 'string', 'locationName' => 'retryStatus', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'urlTasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'UrlTask', ], ],
            ],
        ],
        'DomainGroupItem' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'primaryDomain' => [ 'type' => 'string', 'locationName' => 'primaryDomain', ],
                'shareCache' => [ 'type' => 'string', 'locationName' => 'shareCache', ],
                'domainGroupName' => [ 'type' => 'string', 'locationName' => 'domainGroupName', ],
            ],
        ],
        'ConfigItem' => [
            'type' => 'structure',
            'members' => [
                'configItemType' => [ 'type' => 'string', 'locationName' => 'configItemType', ],
                'configItemName' => [ 'type' => 'string', 'locationName' => 'configItemName', ],
                'configStatus' => [ 'type' => 'integer', 'locationName' => 'configStatus', ],
                'configStatusName' => [ 'type' => 'string', 'locationName' => 'configStatusName', ],
                'configItemDetails' => [ 'type' => 'object', 'locationName' => 'configItemDetails', ],
            ],
        ],
        'IpSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'master' => [ 'type' => 'integer', 'locationName' => 'master', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'ratio' => [ 'type' => 'double', 'locationName' => 'ratio', ],
            ],
        ],
        'CheckWhetherIpBelongToJCloudItem' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'belongToJCloud' => [ 'type' => 'boolean', 'locationName' => 'belongToJCloud', ],
                'country' => [ 'type' => 'string', 'locationName' => 'country', ],
                'province' => [ 'type' => 'string', 'locationName' => 'province', ],
                'city' => [ 'type' => 'string', 'locationName' => 'city', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
            ],
        ],
        'QueryLivePrefetchItem' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'AttackLogRecord' => [
            'type' => 'structure',
            'members' => [
                'attackTraffic' => [ 'type' => 'float', 'locationName' => 'attackTraffic', ],
                'attackType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'blackHole' => [ 'type' => 'integer', 'locationName' => 'blackHole', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
            ],
        ],
        'GeoArea' => [
            'type' => 'structure',
            'members' => [
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'children' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoArea', ], ],
            ],
        ],
        'ProtectData' => [
            'type' => 'structure',
            'members' => [
                'postProtect' => [ 'type' => 'float', 'locationName' => 'postProtect', ],
                'preProtect' => [ 'type' => 'float', 'locationName' => 'preProtect', ],
                'timeStamp' => [ 'type' => 'long', 'locationName' => 'timeStamp', ],
                'timeUtc' => [ 'type' => 'string', 'locationName' => 'timeUtc', ],
            ],
        ],
        'AttackTypeCount' => [
            'type' => 'structure',
            'members' => [
                'attackCount' => [ 'type' => 'long', 'locationName' => 'attackCount', ],
                'attackType' => [ 'type' => 'string', 'locationName' => 'attackType', ],
            ],
        ],
        'SslCertModel' => [
            'type' => 'structure',
            'members' => [
                'sslCertId' => [ 'type' => 'string', 'locationName' => 'sslCertId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'sslCertStartTime' => [ 'type' => 'string', 'locationName' => 'sslCertStartTime', ],
                'sslCertEndTime' => [ 'type' => 'string', 'locationName' => 'sslCertEndTime', ],
                'deletable' => [ 'type' => 'integer', 'locationName' => 'deletable', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'relatedDomains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'StatisticsTopUrlData' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'urls' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsTopUrlItem', ], ],
            ],
        ],
        'StatisticsWithAreaGroupDetailItem' => [
            'type' => 'structure',
            'members' => [
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'ispStat' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DirBandwidthItem' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'dirs' => [ 'type' => 'list', 'member' => [ 'shape' => 'DirData', ], ],
            ],
        ],
        'StatisticsTopIpItem' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'fullValue' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'object', ], ],
            ],
        ],
        'StatisticsData' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'dataItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsDataItem', ], ],
            ],
        ],
        'DirData' => [
            'type' => 'structure',
            'members' => [
                'dir' => [ 'type' => 'string', 'locationName' => 'dir', ],
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
                'regions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DirRegionData', ], ],
            ],
        ],
        'StatisticsTopIpData' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsTopIpItem', ], ],
            ],
        ],
        'StatisticsWithAreaGroupDetail' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsWithAreaGroupDetailItem', ], ],
            ],
        ],
        'StatisticsDataItem' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'object', ], ],
            ],
        ],
        'DirRegionData' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'bandwidth' => [ 'type' => 'long', 'locationName' => 'bandwidth', ],
            ],
        ],
        'StatisticsTopUrlItem' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'fullValue' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'object', ], ],
            ],
        ],
        'StatisticsGroupSumDataItem' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'object', ], ],
            ],
        ],
        'StreamHistoryInfoForYY' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'avgupspeed' => [ 'type' => 'long', 'locationName' => 'avgupspeed', ],
                'avgupframerate' => [ 'type' => 'long', 'locationName' => 'avgupframerate', ],
                'pushEdgeNodeIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'anchorIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'flvBandWidth' => [ 'type' => 'long', 'locationName' => 'flvBandWidth', ],
                'flvPlayerCount' => [ 'type' => 'long', 'locationName' => 'flvPlayerCount', ],
                'hlsBandWidth' => [ 'type' => 'long', 'locationName' => 'hlsBandWidth', ],
                'hlsPlayerCount' => [ 'type' => 'long', 'locationName' => 'hlsPlayerCount', ],
            ],
        ],
        'StreamRankingForYY' => [
            'type' => 'structure',
            'members' => [
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'ranking' => [ 'type' => 'integer', 'locationName' => 'ranking', ],
                'playerCount' => [ 'type' => 'long', 'locationName' => 'playerCount', ],
            ],
        ],
        'DomainlogModel' => [
            'type' => 'structure',
            'members' => [
                'logUrl' => [ 'type' => 'string', 'locationName' => 'logUrl', ],
                'logSize' => [ 'type' => 'long', 'locationName' => 'logSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'lastModified' => [ 'type' => 'string', 'locationName' => 'lastModified', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
            ],
        ],
        'AccessUserlogModel' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'urls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainlogModel', ], ],
            ],
        ],
        'UserLogInfoModel' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'logFileFullPath' => [ 'type' => 'string', 'locationName' => 'logFileFullPath', ],
                'interval' => [ 'type' => 'string', 'locationName' => 'interval', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'logSize' => [ 'type' => 'long', 'locationName' => 'logSize', ],
                'logMD5' => [ 'type' => 'string', 'locationName' => 'logMD5', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'WafBlackRuleModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'valZh' => [ 'type' => 'string', 'locationName' => 'valZh', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'action' => [ 'type' => 'object', 'locationName' => 'action', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'WafRegionsModel' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
                'label' => [ 'type' => 'string', 'locationName' => 'label', ],
            ],
        ],
        'WafWhiteRuleModel' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'valZh' => [ 'type' => 'string', 'locationName' => 'valZh', ],
                'enable' => [ 'type' => 'boolean', 'locationName' => 'enable', ],
                'actions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
            ],
        ],
        'WafCCProtectRuleModel' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'data' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'AttackDetail' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'flow' => [ 'type' => 'string', 'locationName' => 'flow', ],
                'timeUtc' => [ 'type' => 'string', 'locationName' => 'timeUtc', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'attackType' => [ 'type' => 'string', 'locationName' => 'attackType', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
            ],
        ],
        'AreaData' => [
            'type' => 'structure',
            'members' => [
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'totalPv' => [ 'type' => 'integer', 'locationName' => 'totalPv', ],
                'location' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpData', ], ],
            ],
        ],
        'PvItem' => [
            'type' => 'structure',
            'members' => [
                'timeUtc' => [ 'type' => 'string', 'locationName' => 'timeUtc', ],
                'totalPv' => [ 'type' => 'integer', 'locationName' => 'totalPv', ],
                'attackPv' => [ 'type' => 'integer', 'locationName' => 'attackPv', ],
            ],
        ],
        'IpData' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
            ],
        ],
        'QueryDomainsLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'logs' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainsLog', ], ],
            ],
        ],
        'QueryDomainLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'urls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainLog', ], ],
            ],
        ],
        'QueryDomainLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'interval' => [ 'type' => 'string', 'locationName' => 'interval', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryDomainsLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'interval' => [ 'type' => 'string', 'locationName' => 'interval', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
            ],
        ],
        'QueryDomainLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainLogResultShape', ],
            ],
        ],
        'QueryDomainsLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainsLogResultShape', ],
            ],
        ],
        'QueryOnlineBillingTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryOnlineBillingTypeResultShape', ],
            ],
        ],
        'QueryOnlineBillingTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'allType' => [ 'type' => 'integer', 'locationName' => 'allType', ],
                'vip' => [ 'type' => 'integer', 'locationName' => 'vip', ],
            ],
        ],
        'SetOnlineBillingTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'allType' => [ 'type' => 'integer', 'locationName' => 'allType', ],
            ],
        ],
        'SetOnlineBillingTypeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryOnlineBillingTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetOnlineBillingTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetOnlineBillingTypeResultShape', ],
            ],
        ],
        'QueryBandWithAreaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryBandWithAreaResultShape', ],
            ],
        ],
        'QueryBandResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryBandResultShape', ],
            ],
        ],
        'QueryBandRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'QueryBandWithAreaResultShape' => [
            'type' => 'structure',
            'members' => [
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BandTrafficWithAreaDataItem', ], ],
            ],
        ],
        'QueryBandResultShape' => [
            'type' => 'structure',
            'members' => [
                'resultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BandTrafficDataItem', ], ],
            ],
        ],
        'QueryBandWithAreaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'QueryDomainConfigStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainConfigStatusResultShape', ],
            ],
        ],
        'QueryDomainConfigStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
            ],
        ],
        'QueryDomainConfigStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryAreaIspListRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryAreaIspListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryAreaIspListResultShape', ],
            ],
        ],
        'QueryAreaIspListResultShape' => [
            'type' => 'structure',
            'members' => [
                'mainLand' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
                'overseas' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
                'isp' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
                'gangaotai' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
                'oceanica' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
                'southAmerica' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
                'northAmerica' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
                'asia' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
                'europe' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaIspItem', ], ],
            ],
        ],
        'SetFollowRedirectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'OperateShareCacheResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'OperateShareCacheResultShape', ],
            ],
        ],
        'SetHttpHeaderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetHttpHeaderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'StopMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'StopMonitorResultShape', ],
            ],
        ],
        'SetVideoDraftResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetVideoDraftResultShape', ],
            ],
        ],
        'SetMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetMonitorResultShape', ],
            ],
        ],
        'SetIgnoreQueryStringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetIgnoreQueryStringResultShape', ],
            ],
        ],
        'UpdateCacheRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetIpBlackListResultShape', ],
            ],
        ],
        'QueryIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'SetDomainConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetDomainConfigResultShape', ],
            ],
        ],
        'DeleteHttpHeaderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetReferRequestShape' => [
            'type' => 'structure',
            'members' => [
                'referType' => [ 'type' => 'string', 'locationName' => 'referType', ],
                'referList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allowNoReferHeader' => [ 'type' => 'string', 'locationName' => 'allowNoReferHeader', ],
                'allowNullReferHeader' => [ 'type' => 'string', 'locationName' => 'allowNullReferHeader', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryUserAgentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetDomainConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryDomainAllConfigClassifyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryAccesskeyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryAccesskeyConfigResultShape', ],
            ],
        ],
        'SetSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetSourceResultShape', ],
            ],
        ],
        'SetHttpHeaderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetHttpHeaderResultShape', ],
            ],
        ],
        'SetReferResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetReferResultShape', ],
            ],
        ],
        'QueryDomainAllConfigClassifyResultShape' => [
            'type' => 'structure',
            'members' => [
                'configItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
            ],
        ],
        'SetIgnoreQueryStringRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryUserAgentResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'userAgentType' => [ 'type' => 'string', 'locationName' => 'userAgentType', ],
                'userAgentList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allowNoUserAgentHeader' => [ 'type' => 'string', 'locationName' => 'allowNoUserAgentHeader', ],
            ],
        ],
        'UpdateCacheRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'ttl' => [ 'type' => 'long', 'locationName' => 'ttl', ],
                'contents' => [ 'type' => 'string', 'locationName' => 'contents', ],
                'cacheType' => [ 'type' => 'integer', 'locationName' => 'cacheType', ],
                'configId' => [ 'type' => 'long', 'locationName' => 'configId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetAccesskeyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accesskeyType' => [ 'type' => 'integer', 'locationName' => 'accesskeyType', ],
                'accesskeyKey' => [ 'type' => 'string', 'locationName' => 'accesskeyKey', ],
                'accesskeyKeep' => [ 'type' => 'integer', 'locationName' => 'accesskeyKeep', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryFollowSourceProtocolResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'followProtocolStatus' => [ 'type' => 'string', 'locationName' => 'followProtocolStatus', ],
            ],
        ],
        'SetReferResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OperateShareCacheRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'PreviewCertificateResultShape' => [
            'type' => 'structure',
            'members' => [
                'sigAlgName' => [ 'type' => 'string', 'locationName' => 'sigAlgName', ],
                'issuer' => [ 'type' => 'string', 'locationName' => 'issuer', ],
                'startDate' => [ 'type' => 'string', 'locationName' => 'startDate', ],
                'endDate' => [ 'type' => 'string', 'locationName' => 'endDate', ],
                'user' => [ 'type' => 'string', 'locationName' => 'user', ],
                'sigHashAlgName' => [ 'type' => 'string', 'locationName' => 'sigHashAlgName', ],
            ],
        ],
        'ExecuteDomainCopyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'ExecuteDomainCopyResultShape', ],
            ],
        ],
        'SetFollowSourceProtocolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetFollowSourceProtocolResultShape', ],
            ],
        ],
        'DeleteHttpHeaderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteHttpHeaderResultShape', ],
            ],
        ],
        'QueryIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'CreateCacheRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'configId' => [ 'type' => 'long', 'locationName' => 'configId', ],
            ],
        ],
        'QueryMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cycle' => [ 'type' => 'integer', 'locationName' => 'cycle', ],
                'monitorPath' => [ 'type' => 'string', 'locationName' => 'monitorPath', ],
                'httpRequestHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
            ],
        ],
        'SetHttpTypeResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryDomainAllConfigClassifyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainAllConfigClassifyResultShape', ],
            ],
        ],
        'SetRangeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetRangeResultShape', ],
            ],
        ],
        'SetMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'monitorId' => [ 'type' => 'long', 'locationName' => 'monitorId', ],
            ],
        ],
        'SetUserAgentConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'userAgentType' => [ 'type' => 'string', 'locationName' => 'userAgentType', ],
                'userAgentList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DeleteCacheRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'configId' => [ 'type' => 'long', 'locationName' => 'configId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetIgnoreQueryStringResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExecuteDomainCopyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'copyDomains' => [ 'type' => 'string', 'locationName' => 'copyDomains', ],
                'configKeys' => [ 'type' => 'string', 'locationName' => 'configKeys', ],
            ],
        ],
        'SetSourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'SetVideoDraftRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DeleteHttpHeaderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryFollowRedirectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryFollowRedirectResultShape', ],
            ],
        ],
        'QueryDefaultHttpHeaderKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExecuteDomainCopyResultShape' => [
            'type' => 'structure',
            'members' => [
                'errorResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorEntity', ], ],
            ],
        ],
        'SetFollowSourceProtocolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cycle' => [ 'type' => 'integer', 'locationName' => 'cycle', ],
                'monitorPath' => [ 'type' => 'string', 'locationName' => 'monitorPath', ],
                'httpRequestHeader' => [ 'type' => 'map', 'key' => [ 'type' => 'string', ], 'value' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'StopMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryFollowRedirectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetHttpTypeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetHttpTypeResultShape', ],
            ],
        ],
        'CreateCacheRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateCacheRuleResultShape', ],
            ],
        ],
        'QueryMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryMonitorResultShape', ],
            ],
        ],
        'DeleteCacheRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCacheRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteCacheRuleResultShape', ],
            ],
        ],
        'SetRangeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetRangeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryFollowSourceProtocolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryFollowSourceProtocolResultShape', ],
            ],
        ],
        'QueryUserAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryUserAgentResultShape', ],
            ],
        ],
        'CreateCacheRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'weight' => [ 'type' => 'integer', 'locationName' => 'weight', ],
                'ttl' => [ 'type' => 'long', 'locationName' => 'ttl', ],
                'contents' => [ 'type' => 'string', 'locationName' => 'contents', ],
                'cacheType' => [ 'type' => 'integer', 'locationName' => 'cacheType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetVideoDraftResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryFollowRedirectResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'followRedirect' => [ 'type' => 'string', 'locationName' => 'followRedirect', ],
            ],
        ],
        'OperateIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryHttpHeaderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryHttpHeaderResultShape', ],
            ],
        ],
        'SetAccesskeyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetAccesskeyConfigResultShape', ],
            ],
        ],
        'SetIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetFollowSourceProtocolResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryHttpHeaderResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryHttpHeaderResp', ], ],
            ],
        ],
        'SetHttpTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'httpType' => [ 'type' => 'string', 'locationName' => 'httpType', ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'rsaKey' => [ 'type' => 'string', 'locationName' => 'rsaKey', ],
                'jumpType' => [ 'type' => 'string', 'locationName' => 'jumpType', ],
                'certFrom' => [ 'type' => 'string', 'locationName' => 'certFrom', ],
                'sslCertId' => [ 'type' => 'string', 'locationName' => 'sslCertId', ],
                'syncToSsl' => [ 'type' => 'boolean', 'locationName' => 'syncToSsl', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryIpBlackListResultShape', ],
            ],
        ],
        'QueryHttpHeaderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'OperateShareCacheResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryDefaultHttpHeaderKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'reqDefaultHttpHeaderKey' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'respDefaultHttpHeaderKey' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryAccesskeyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'accesskeyType' => [ 'type' => 'integer', 'locationName' => 'accesskeyType', ],
                'accesskeyKey' => [ 'type' => 'string', 'locationName' => 'accesskeyKey', ],
                'accesskeyKeep' => [ 'type' => 'integer', 'locationName' => 'accesskeyKeep', ],
            ],
        ],
        'SetFollowRedirectResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateCacheRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateCacheRuleResultShape', ],
            ],
        ],
        'PreviewCertificateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetDomainConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'httpType' => [ 'type' => 'string', 'locationName' => 'httpType', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'jumpType' => [ 'type' => 'string', 'locationName' => 'jumpType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetUserAgentConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'PreviewCertificateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PreviewCertificateResultShape', ],
            ],
        ],
        'SetUserAgentConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetUserAgentConfigResultShape', ],
            ],
        ],
        'OperateIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'ipSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSourceInfo', ], ],
                'domainSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainSourceInfo', ], ],
                'ossSource' => [ 'type' => 'string', 'locationName' => 'ossSource', ],
                'defaultSourceHost' => [ 'type' => 'string', 'locationName' => 'defaultSourceHost', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'StopMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryDefaultHttpHeaderKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDefaultHttpHeaderKeyResultShape', ],
            ],
        ],
        'OperateIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'OperateIpBlackListResultShape', ],
            ],
        ],
        'SetAccesskeyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryAccesskeyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetFollowRedirectResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetFollowRedirectResultShape', ],
            ],
        ],
        'QueryFollowSourceProtocolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryDomainGroupListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'shareCache' => [ 'type' => 'string', 'locationName' => 'shareCache', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'primaryDomain' => [ 'type' => 'string', 'locationName' => 'primaryDomain', ],
                'domainGroupName' => [ 'type' => 'string', 'locationName' => 'domainGroupName', ],
            ],
        ],
        'QueryDomainsNotInGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDomainGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateDomainGroupResultShape', ],
            ],
        ],
        'BatchDeleteDomainGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'long', ], ],
            ],
        ],
        'QueryDomainsNotInGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateDomainGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'primaryDomain' => [ 'type' => 'string', 'locationName' => 'primaryDomain', ],
                'shareCache' => [ 'type' => 'string', 'locationName' => 'shareCache', ],
                'domainGroupName' => [ 'type' => 'string', 'locationName' => 'domainGroupName', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'CreateDomainGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BatchDeleteDomainGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchDeleteDomainGroupResultShape', ],
            ],
        ],
        'CreateDomainGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'shareCache' => [ 'type' => 'string', 'locationName' => 'shareCache', ],
                'primaryDomain' => [ 'type' => 'string', 'locationName' => 'primaryDomain', ],
                'domainGroupName' => [ 'type' => 'string', 'locationName' => 'domainGroupName', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryDomainGroupListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'domainGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainGroupItem', ], ],
            ],
        ],
        'UpdateDomainGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryDomainGroupDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryDomainGroupDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDomainGroupDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'primaryDomain' => [ 'type' => 'string', 'locationName' => 'primaryDomain', ],
                'shareCache' => [ 'type' => 'string', 'locationName' => 'shareCache', ],
                'domainGroupName' => [ 'type' => 'string', 'locationName' => 'domainGroupName', ],
            ],
        ],
        'UpdateDomainGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateDomainGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDomainGroupDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
            ],
        ],
        'QueryDomainGroupListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainGroupListResultShape', ],
            ],
        ],
        'QueryDomainsNotInGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryDomainsNotInGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchDeleteDomainGroupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainListByFilterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyWord' => [ 'type' => 'string', 'locationName' => 'keyWord', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
            ],
        ],
        'StopDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryOssBucketsRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyWord' => [ 'type' => 'string', 'locationName' => 'keyWord', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
            ],
        ],
        'CreateDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'cdnType' => [ 'type' => 'string', 'locationName' => 'cdnType', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'dailyBandWidth' => [ 'type' => 'long', 'locationName' => 'dailyBandWidth', ],
                'quaility' => [ 'type' => 'string', 'locationName' => 'quaility', ],
                'maxFileSize' => [ 'type' => 'long', 'locationName' => 'maxFileSize', ],
                'minFileSize' => [ 'type' => 'long', 'locationName' => 'minFileSize', ],
                'sumFileSize' => [ 'type' => 'long', 'locationName' => 'sumFileSize', ],
                'avgFileSize' => [ 'type' => 'long', 'locationName' => 'avgFileSize', ],
                'defaultSourceHost' => [ 'type' => 'string', 'locationName' => 'defaultSourceHost', ],
                'httpType' => [ 'type' => 'string', 'locationName' => 'httpType', ],
                'ipSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSourceInfo', ], ],
                'domainSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainSourceInfo', ], ],
                'ossSource' => [ 'type' => 'string', 'locationName' => 'ossSource', ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'StopDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StopDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetDomainListByFilterResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListDomainItemByFilter', ], ],
            ],
        ],
        'GetDomainListResultShape' => [
            'type' => 'structure',
            'members' => [
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListDomainItem', ], ],
            ],
        ],
        'BatchCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'cdnType' => [ 'type' => 'string', 'locationName' => 'cdnType', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'dailyBandWidth' => [ 'type' => 'long', 'locationName' => 'dailyBandWidth', ],
                'quaility' => [ 'type' => 'string', 'locationName' => 'quaility', ],
                'maxFileSize' => [ 'type' => 'long', 'locationName' => 'maxFileSize', ],
                'minFileSize' => [ 'type' => 'long', 'locationName' => 'minFileSize', ],
                'sumFileSize' => [ 'type' => 'long', 'locationName' => 'sumFileSize', ],
                'avgFileSize' => [ 'type' => 'long', 'locationName' => 'avgFileSize', ],
                'defaultSourceHost' => [ 'type' => 'string', 'locationName' => 'defaultSourceHost', ],
                'httpType' => [ 'type' => 'string', 'locationName' => 'httpType', ],
                'ipSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSourceInfo', ], ],
                'domainSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainSourceInfo', ], ],
                'ossSource' => [ 'type' => 'string', 'locationName' => 'ossSource', ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
            ],
        ],
        'CreateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryDomainConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'ignoreQueryString' => [ 'type' => 'string', 'locationName' => 'ignoreQueryString', ],
                'range' => [ 'type' => 'string', 'locationName' => 'range', ],
                'httpType' => [ 'type' => 'string', 'locationName' => 'httpType', ],
                'httpsCertificate' => [ 'type' => 'string', 'locationName' => 'httpsCertificate', ],
                'httpsRsaKey' => [ 'type' => 'string', 'locationName' => 'httpsRsaKey', ],
                'httpsJumpType' => [ 'type' => 'string', 'locationName' => 'httpsJumpType', ],
                'videoDraft' => [ 'type' => 'string', 'locationName' => 'videoDraft', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
                'shareId' => [ 'type' => 'long', 'locationName' => 'shareId', ],
                'shareName' => [ 'type' => 'string', 'locationName' => 'shareName', ],
                'jcdnTimeAnti' => [ 'type' => 'string', 'locationName' => 'jcdnTimeAnti', ],
                'shareCache' => [ 'type' => 'string', 'locationName' => 'shareCache', ],
                'isShareOpen' => [ 'type' => 'string', 'locationName' => 'isShareOpen', ],
                'cacheRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheRule', ], ],
            ],
        ],
        'GetDomainDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchCreateResultShape', ],
            ],
        ],
        'QueryDomainConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainConfigResultShape', ],
            ],
        ],
        'GetDomainListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetDomainListResultShape', ],
            ],
        ],
        'QueryOssBucketsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'ossBuckets' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'DeleteDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'GetDomainListByFilterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetDomainListByFilterResultShape', ],
            ],
        ],
        'CreateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateDomainResultShape', ],
            ],
        ],
        'DeleteDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'StartDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryDomainConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'StartDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryOssBucketsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryOssBucketsResultShape', ],
            ],
        ],
        'GetDomainDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'allStatus' => [ 'type' => 'string', 'locationName' => 'allStatus', ],
                'allowNoReferHeader' => [ 'type' => 'string', 'locationName' => 'allowNoReferHeader', ],
                'allowNullReferHeader' => [ 'type' => 'string', 'locationName' => 'allowNullReferHeader', ],
                'dailyBandWidth' => [ 'type' => 'integer', 'locationName' => 'dailyBandWidth', ],
                'forbiddenType' => [ 'type' => 'string', 'locationName' => 'forbiddenType', ],
                'maxFileSize' => [ 'type' => 'long', 'locationName' => 'maxFileSize', ],
                'minFileSize' => [ 'type' => 'long', 'locationName' => 'minFileSize', ],
                'sumFileSize' => [ 'type' => 'long', 'locationName' => 'sumFileSize', ],
                'avgFileSize' => [ 'type' => 'long', 'locationName' => 'avgFileSize', ],
                'referList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'referType' => [ 'type' => 'string', 'locationName' => 'referType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'archiveNo' => [ 'type' => 'string', 'locationName' => 'archiveNo', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'created' => [ 'type' => 'string', 'locationName' => 'created', ],
                'modified' => [ 'type' => 'string', 'locationName' => 'modified', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
                'source' =>  [ 'shape' => 'BackSourceInfo', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'defaultSourceHost' => [ 'type' => 'string', 'locationName' => 'defaultSourceHost', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'httpType' => [ 'type' => 'string', 'locationName' => 'httpType', ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'rsaKey' => [ 'type' => 'string', 'locationName' => 'rsaKey', ],
                'jumpType' => [ 'type' => 'string', 'locationName' => 'jumpType', ],
                'certFrom' => [ 'type' => 'string', 'locationName' => 'certFrom', ],
                'sslCertId' => [ 'type' => 'string', 'locationName' => 'sslCertId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'sslCertStartTime' => [ 'type' => 'string', 'locationName' => 'sslCertStartTime', ],
                'sslCertEndTime' => [ 'type' => 'string', 'locationName' => 'sslCertEndTime', ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
            ],
        ],
        'BatchCreateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CheckWhetherIpBelongToJCloudResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CheckWhetherIpBelongToJCloudItem', ], ],
            ],
        ],
        'CheckWhetherIpBelongToJCloudRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CheckWhetherIpBelongToJCloudResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CheckWhetherIpBelongToJCloudResultShape', ],
            ],
        ],
        'OperateLiveDomainIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'blackIpsEnable' => [ 'type' => 'string', 'locationName' => 'blackIpsEnable', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryPushDomainORAppOrStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryPushDomainORAppOrStreamResultShape', ],
            ],
        ],
        'SetLiveDomainIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainIpBlackListResultShape', ],
            ],
        ],
        'SetLiveDomainReferResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveDomainAccessKeyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveDomainReferRequestShape' => [
            'type' => 'structure',
            'members' => [
                'referType' => [ 'type' => 'string', 'locationName' => 'referType', ],
                'referList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allowNoReferHeader' => [ 'type' => 'string', 'locationName' => 'allowNoReferHeader', ],
                'allowNullReferHeader' => [ 'type' => 'string', 'locationName' => 'allowNullReferHeader', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'OperateLiveDomainIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'OperateLiveDomainIpBlackListResultShape', ],
            ],
        ],
        'SetLiveDomainBackSourceHostResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainBackSourceHostResultShape', ],
            ],
        ],
        'DeleteForbiddenStreamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deleteStreams' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeleteStream', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetLiveDomainIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryPushDomainORAppOrStreamRequestShape' => [
            'type' => 'structure',
            'members' => [
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'limit' => [ 'type' => 'long', 'locationName' => 'limit', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetProtocolConvertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'rsaKey' => [ 'type' => 'string', 'locationName' => 'rsaKey', ],
                'certFrom' => [ 'type' => 'string', 'locationName' => 'certFrom', ],
                'sslCertId' => [ 'type' => 'string', 'locationName' => 'sslCertId', ],
                'syncToSsl' => [ 'type' => 'boolean', 'locationName' => 'syncToSsl', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'protocolConverts' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtocolConvert', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetLiveDomainAccessKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainAccessKeyResultShape', ],
            ],
        ],
        'OperateLiveDomainIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetProtocolConvertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetProtocolConvertResultShape', ],
            ],
        ],
        'SetProtocolConvertResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryPushDomainORAppOrStreamResultShape' => [
            'type' => 'structure',
            'members' => [
                'streams' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SetLiveDomainBackSourceHostResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveDomainBackSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sourceType' => [ 'type' => 'int32', 'locationName' => 'sourceType', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'defaultSourceHost' => [ 'type' => 'string', 'locationName' => 'defaultSourceHost', ],
                'domainSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainSourceInfo', ], ],
                'ipSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSourceInfo', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetLiveDomainReferResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainReferResultShape', ],
            ],
        ],
        'SetLiveDomainBackSourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveDomainBackSourceHostRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sourceHost' => [ 'type' => 'string', 'locationName' => 'sourceHost', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DeleteForbiddenStreamResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveDomainAccessKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accesskeyType' => [ 'type' => 'integer', 'locationName' => 'accesskeyType', ],
                'accesskeyKey' => [ 'type' => 'string', 'locationName' => 'accesskeyKey', ],
                'authLifeTime' => [ 'type' => 'integer', 'locationName' => 'authLifeTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetLiveDomainIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetLiveDomainBackSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainBackSourceResultShape', ],
            ],
        ],
        'DeleteForbiddenStreamResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteForbiddenStreamResultShape', ],
            ],
        ],
        'QueryLiveDomainDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'BatchCreateLiveDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'backHttpType' => [ 'type' => 'string', 'locationName' => 'backHttpType', ],
                'defaultSourceHost' => [ 'type' => 'string', 'locationName' => 'defaultSourceHost', ],
                'siteType' => [ 'type' => 'string', 'locationName' => 'siteType', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'ipSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpSourceInfo', ], ],
                'domainSource' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainSourceInfo', ], ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
            ],
        ],
        'BatchCreateLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchCreateLiveDomainResultShape', ],
            ],
        ],
        'QueryLiveDomainAppsResultShape' => [
            'type' => 'structure',
            'members' => [
                'apps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryLiveDomainDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryLiveDomainDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryLiveDomainAppsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryLiveDomainAppsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryLiveDomainDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'domainType' => [ 'type' => 'string', 'locationName' => 'domainType', ],
                'playDomain' => [ 'type' => 'string', 'locationName' => 'playDomain', ],
                'publishDomain' => [ 'type' => 'string', 'locationName' => 'publishDomain', ],
                'originDomain' => [ 'type' => 'string', 'locationName' => 'originDomain', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'siteType' => [ 'type' => 'string', 'locationName' => 'siteType', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'source' =>  [ 'shape' => 'BackSourceInfo', ],
                'sourceType' => [ 'type' => 'string', 'locationName' => 'sourceType', ],
                'backSourceType' => [ 'type' => 'string', 'locationName' => 'backSourceType', ],
                'videoType' => [ 'type' => 'string', 'locationName' => 'videoType', ],
                'audioType' => [ 'type' => 'string', 'locationName' => 'audioType', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'defaultSourceHost' => [ 'type' => 'string', 'locationName' => 'defaultSourceHost', ],
                'archiveNo' => [ 'type' => 'string', 'locationName' => 'archiveNo', ],
                'rtmpDomain' => [ 'type' => 'string', 'locationName' => 'rtmpDomain', ],
                'rtmpCname' => [ 'type' => 'string', 'locationName' => 'rtmpCname', ],
                'hdlDomain' => [ 'type' => 'string', 'locationName' => 'hdlDomain', ],
                'hdlCname' => [ 'type' => 'string', 'locationName' => 'hdlCname', ],
                'hlsDomain' => [ 'type' => 'string', 'locationName' => 'hlsDomain', ],
                'hlsCname' => [ 'type' => 'string', 'locationName' => 'hlsCname', ],
                'forwardCustomVhost' => [ 'type' => 'string', 'locationName' => 'forwardCustomVhost', ],
                'flvUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hlsUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'rtmpUrls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'protocolConverts' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtocolConvert', ], ],
                'certificate' => [ 'type' => 'string', 'locationName' => 'certificate', ],
                'rsaKey' => [ 'type' => 'string', 'locationName' => 'rsaKey', ],
                'accesskeyType' => [ 'type' => 'integer', 'locationName' => 'accesskeyType', ],
                'accesskeyKey' => [ 'type' => 'string', 'locationName' => 'accesskeyKey', ],
                'playAuthLifeTime' => [ 'type' => 'integer', 'locationName' => 'playAuthLifeTime', ],
                'authLifeTime' => [ 'type' => 'integer', 'locationName' => 'authLifeTime', ],
                'forwardAccessKeyType' => [ 'type' => 'integer', 'locationName' => 'forwardAccessKeyType', ],
                'forwardPrivateKey' => [ 'type' => 'string', 'locationName' => 'forwardPrivateKey', ],
                'originAccessKeyType' => [ 'type' => 'integer', 'locationName' => 'originAccessKeyType', ],
                'originPrivateKey' => [ 'type' => 'string', 'locationName' => 'originPrivateKey', ],
                'allowApps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'blackIpsEnable' => [ 'type' => 'string', 'locationName' => 'blackIpsEnable', ],
                'externId' => [ 'type' => 'string', 'locationName' => 'externId', ],
                'ignoreQueryString' => [ 'type' => 'string', 'locationName' => 'ignoreQueryString', ],
                'referType' => [ 'type' => 'string', 'locationName' => 'referType', ],
                'referList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allowNoReferHeader' => [ 'type' => 'string', 'locationName' => 'allowNoReferHeader', ],
                'allowNullReferHeader' => [ 'type' => 'string', 'locationName' => 'allowNullReferHeader', ],
                'publishNormalTimeout' => [ 'type' => 'string', 'locationName' => 'publishNormalTimeout', ],
                'notifyCustomUrl' => [ 'type' => 'string', 'locationName' => 'notifyCustomUrl', ],
                'notifyCustomAuthKey' => [ 'type' => 'string', 'locationName' => 'notifyCustomAuthKey', ],
                'certFrom' => [ 'type' => 'string', 'locationName' => 'certFrom', ],
                'sslCertId' => [ 'type' => 'string', 'locationName' => 'sslCertId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'sslCertStartTime' => [ 'type' => 'string', 'locationName' => 'sslCertStartTime', ],
                'sslCertEndTime' => [ 'type' => 'string', 'locationName' => 'sslCertEndTime', ],
                'accelerateRegion' => [ 'type' => 'string', 'locationName' => 'accelerateRegion', ],
            ],
        ],
        'QueryLiveDomainAppsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'BatchCreateLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateLiveDomainPrefecthTaskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryLivePrefetchTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'urlList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'CreateLiveDomainPrefecthTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'urlList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'prefetchTime' => [ 'type' => 'integer', 'locationName' => 'prefetchTime', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
            ],
        ],
        'CreateLiveDomainPrefecthTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateLiveDomainPrefecthTaskResultShape', ],
            ],
        ],
        'QueryLivePrefetchTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'result' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryLivePrefetchItem', ], ],
            ],
        ],
        'QueryLivePrefetchTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryLivePrefetchTaskResultShape', ],
            ],
        ],
        'QueryRefreshTaskByIdRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryRefreshTaskByIdResultShape' => [
            'type' => 'structure',
            'members' => [
                'task' =>  [ 'shape' => 'RefreshTask', ],
            ],
        ],
        'QueryRefreshTaskByIdResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryRefreshTaskByIdResultShape', ],
            ],
        ],
        'QueryRefreshTaskByIdsResultShape' => [
            'type' => 'structure',
            'members' => [
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefreshTask', ], ],
            ],
        ],
        'CreateRefreshTaskForCallbackResultShape' => [
            'type' => 'structure',
            'members' => [
                'errorCount' => [ 'type' => 'integer', 'locationName' => 'errorCount', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'QueryRefreshTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'QueryRefreshTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'tasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'RefreshTask', ], ],
            ],
        ],
        'CreateRefreshTaskForCallbackV2RequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'urlItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'UrlItemV2', ], ],
            ],
        ],
        'CreateRefreshTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateRefreshTaskResultShape', ],
            ],
        ],
        'CreateRefreshTaskResultShape' => [
            'type' => 'structure',
            'members' => [
                'errorCount' => [ 'type' => 'integer', 'locationName' => 'errorCount', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateRefreshTaskForCallbackRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'urlItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'UrlItem', ], ],
            ],
        ],
        'CreateRefreshTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'urls' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryRefreshTaskByIdsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
            ],
        ],
        'CreateRefreshTaskForCallbackV2ResultShape' => [
            'type' => 'structure',
            'members' => [
                'errorCount' => [ 'type' => 'integer', 'locationName' => 'errorCount', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'CreateRefreshTaskForCallbackV2ResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateRefreshTaskForCallbackV2ResultShape', ],
            ],
        ],
        'QueryRefreshTaskByIdsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryRefreshTaskByIdsResultShape', ],
            ],
        ],
        'CreateRefreshTaskForCallbackResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateRefreshTaskForCallbackResultShape', ],
            ],
        ],
        'QueryRefreshTaskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryRefreshTaskResultShape', ],
            ],
        ],
        'QueryNetProtectionRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryAttackTypeCountResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryAttackTypeCountResultShape', ],
            ],
        ],
        'QueryAttackTypeCountResultShape' => [
            'type' => 'structure',
            'members' => [
                'attackTypeCounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackTypeCount', ], ],
            ],
        ],
        'SearchAttackLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SearchAttackLogResultShape', ],
            ],
        ],
        'SetNetProtectionRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetNetProtectionRulesResultShape', ],
            ],
        ],
        'QueryGeoAreasRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryNetProtectionRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryNetProtectionRulesResultShape', ],
            ],
        ],
        'SetNetProtectionRulesSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetNetProtectionRulesSwitchResultShape', ],
            ],
        ],
        'QueryGeoAreasResultShape' => [
            'type' => 'structure',
            'members' => [
                'geoBlack' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoArea', ], ],
            ],
        ],
        'SearchAttackLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'sortField' => [ 'type' => 'string', 'locationName' => 'sortField', ],
                'sortRule' => [ 'type' => 'string', 'locationName' => 'sortRule', ],
            ],
        ],
        'QueryDdosGraphResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDdosGraphResultShape', ],
            ],
        ],
        'QueryNetProtectionRulesSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
            ],
        ],
        'SetNetProtectionRulesSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
            ],
        ],
        'QueryDdosGraphResultShape' => [
            'type' => 'structure',
            'members' => [
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProtectData', ], ],
                'unit' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SetNetProtectionRulesSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetNetProtectionRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryNetProtectionRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
                'srcNewConnLimitEnable' => [ 'type' => 'string', 'locationName' => 'srcNewConnLimitEnable', ],
                'dstNewConnLimitEnable' => [ 'type' => 'string', 'locationName' => 'dstNewConnLimitEnable', ],
                'datagramRangeMin' => [ 'type' => 'long', 'locationName' => 'datagramRangeMin', ],
                'datagramRangeMax' => [ 'type' => 'long', 'locationName' => 'datagramRangeMax', ],
                'srcNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcNewConnLimitValue', ],
                'dstNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstNewConnLimitValue', ],
                'geoBlack' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoArea', ], ],
                'ipBlack' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipWhite' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryNetProtectionRulesSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryGeoAreasResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryGeoAreasResultShape', ],
            ],
        ],
        'QueryAttackTypeCountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'SetNetProtectionRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'srcNewConnLimitEnable' => [ 'type' => 'string', 'locationName' => 'srcNewConnLimitEnable', ],
                'dstNewConnLimitEnable' => [ 'type' => 'string', 'locationName' => 'dstNewConnLimitEnable', ],
                'datagramRangeMin' => [ 'type' => 'long', 'locationName' => 'datagramRangeMin', ],
                'datagramRangeMax' => [ 'type' => 'long', 'locationName' => 'datagramRangeMax', ],
                'dstNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'dstNewConnLimitValue', ],
                'srcNewConnLimitValue' => [ 'type' => 'long', 'locationName' => 'srcNewConnLimitValue', ],
                'geoBlack' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipBlack' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipWhite' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryDdosGraphRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'SearchAttackLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'currentCount' => [ 'type' => 'integer', 'locationName' => 'currentCount', ],
                'dataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackLogRecord', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'totalPage' => [ 'type' => 'integer', 'locationName' => 'totalPage', ],
            ],
        ],
        'QueryNetProtectionRulesSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryNetProtectionRulesSwitchResultShape', ],
            ],
        ],
        'GetAllUpperNodeIpListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetAllUpperNodeIpListResultShape', ],
            ],
        ],
        'GetAllUpperNodeIpListRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetAllUpperNodeIpListResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetSslCertListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'UploadCertResultShape' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
            ],
        ],
        'UploadCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UploadCertResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UploadCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'keyFile' => [ 'type' => 'string', 'locationName' => 'keyFile', ],
                'certFile' => [ 'type' => 'string', 'locationName' => 'certFile', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
            ],
        ],
        'GetSslCertListResultShape' => [
            'type' => 'structure',
            'members' => [
                'certList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SslCertModel', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetSslCertDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSslCertDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSslCertListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetSslCertListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetSslCertDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sslCertId' => [ 'type' => 'string', 'locationName' => 'sslCertId', ],
            ],
        ],
        'GetSslCertDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'sslCertId' => [ 'type' => 'string', 'locationName' => 'sslCertId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'sslCertStartTime' => [ 'type' => 'string', 'locationName' => 'sslCertStartTime', ],
                'sslCertEndTime' => [ 'type' => 'string', 'locationName' => 'sslCertEndTime', ],
                'deletable' => [ 'type' => 'integer', 'locationName' => 'deletable', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'relatedDomains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'QueryLiveStatisticsDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsDataItem', ], ],
            ],
        ],
        'QueryDirBandwidthResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDirBandwidthResultShape', ],
            ],
        ],
        'QueryStatisticsTopUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'urlData' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsTopUrlData', ], ],
            ],
        ],
        'QueryDirBandwidthRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'dirs' => [ 'type' => 'string', 'locationName' => 'dirs', ],
                'regions' => [ 'type' => 'string', 'locationName' => 'regions', ],
            ],
        ],
        'QueryStatisticsDataGroupByAreaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsDataGroupByAreaResultShape', ],
            ],
        ],
        'QueryMixStatisticsWithAreaDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryMixStatisticsWithAreaDataResultShape', ],
            ],
        ],
        'QueryLiveTrafficGroupSumResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsGroupSumDataItem', ], ],
            ],
        ],
        'QueryStatisticsDataGroupByAreaResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsWithAreaGroupDetail', ], ],
            ],
        ],
        'QueryStatisticsDataGroupSumResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsGroupSumDataItem', ], ],
            ],
        ],
        'QueryStatisticsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsDataResultShape', ],
            ],
        ],
        'QueryStatisticsDataGroupByAreaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'origin' => [ 'type' => 'string', 'locationName' => 'origin', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => 'string', 'locationName' => 'groupBy', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
            ],
        ],
        'QueryMixTrafficGroupSumResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsGroupSumDataItem', ], ],
            ],
        ],
        'QueryMixTrafficGroupSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryMixTrafficGroupSumResultShape', ],
            ],
        ],
        'QueryLiveStatisticsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'reqMethod' => [ 'type' => 'string', 'locationName' => 'reqMethod', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'QueryLiveStatisticsAreaDataGroupByResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryLiveStatisticsAreaDataGroupByResultShape', ],
            ],
        ],
        'QueryLiveTrafficGroupSumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => 'string', 'locationName' => 'groupBy', ],
                'reqMethod' => [ 'type' => 'string', 'locationName' => 'reqMethod', ],
            ],
        ],
        'QueryLiveStatisticsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryLiveStatisticsDataResultShape', ],
            ],
        ],
        'QueryMixStatisticsDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsDataItem', ], ],
            ],
        ],
        'QueryStatisticsDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsDataItem', ], ],
            ],
        ],
        'QueryMixStatisticsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
            ],
        ],
        'QueryStatisticsTopIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ipData' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsTopIpData', ], ],
            ],
        ],
        'QueryStatisticsTopUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsTopUrlResultShape', ],
            ],
        ],
        'QueryStatisticsDataGroupSumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'origin' => [ 'type' => 'string', 'locationName' => 'origin', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => 'string', 'locationName' => 'groupBy', ],
            ],
        ],
        'QueryDirBandwidthResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'datas' => [ 'type' => 'list', 'member' => [ 'shape' => 'DirBandwidthItem', ], ],
            ],
        ],
        'QueryLiveStatisticsAreaDataGroupByResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsWithAreaGroupDetail', ], ],
            ],
        ],
        'QueryMixStatisticsWithAreaDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsWithAreaGroupDetail', ], ],
            ],
        ],
        'QueryLiveStatisticsAreaDataGroupByRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'streamName' => [ 'type' => 'string', 'locationName' => 'streamName', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => 'string', 'locationName' => 'groupBy', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'reqMethod' => [ 'type' => 'string', 'locationName' => 'reqMethod', ],
            ],
        ],
        'QueryStatisticsDataGroupSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsDataGroupSumResultShape', ],
            ],
        ],
        'QueryStatisticsTopIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsTopIpResultShape', ],
            ],
        ],
        'QueryStatisticsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'origin' => [ 'type' => 'string', 'locationName' => 'origin', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'QueryStatisticsTopUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'topBy' => [ 'type' => 'string', 'locationName' => 'topBy', ],
            ],
        ],
        'QueryMixStatisticsWithAreaDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
            ],
        ],
        'QueryLiveTrafficGroupSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryLiveTrafficGroupSumResultShape', ],
            ],
        ],
        'QueryMixStatisticsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryMixStatisticsDataResultShape', ],
            ],
        ],
        'QueryMixTrafficGroupSumRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'fields' => [ 'type' => 'string', 'locationName' => 'fields', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'isp' => [ 'type' => 'string', 'locationName' => 'isp', ],
                'period' => [ 'type' => 'string', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => 'string', 'locationName' => 'groupBy', ],
            ],
        ],
        'QueryStatisticsTopIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => 'string', 'locationName' => 'subDomain', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'topBy' => [ 'type' => 'string', 'locationName' => 'topBy', ],
            ],
        ],
        'QuerywafBlackRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QuerywafBlackRulesResultShape', ],
            ],
        ],
        'QueryWafSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryWafSwitchResultShape', ],
            ],
        ],
        'QueryWebProtectSettingsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryWebProtectSettingsResultShape', ],
            ],
        ],
        'DeleteWafWhiteRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ids' => [ 'type' => 'string', 'locationName' => 'ids', ],
            ],
        ],
        'SetWafBlackRuleSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetWafBlackRuleSwitchResultShape', ],
            ],
        ],
        'QueryWebProtectSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryWebProtectSwitchResultShape', ],
            ],
        ],
        'QueryCCProtectSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'UpdateWafBlackRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateWafBlackRuleResultShape', ],
            ],
        ],
        'CreateWafBlackRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateWafBlackRuleResultShape', ],
            ],
        ],
        'QueryIpBlackSettingStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryIpBlackSettingStatusResultShape', ],
            ],
        ],
        'QueryCCProtectSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryCCProtectSwitchResultShape', ],
            ],
        ],
        'EnableCCProtectRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'EnableCCProtectRuleResultShape', ],
            ],
        ],
        'QueryWafBlackRuleSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QuerywafWhiteRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QuerywafWhiteRulesResultShape', ],
            ],
        ],
        'QueryIpBlackSettingStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'settingStatus' => [ 'type' => 'boolean', 'locationName' => 'settingStatus', ],
            ],
        ],
        'DisableCCProtectRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryWafRegionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryWafRegionsResultShape', ],
            ],
        ],
        'CreateWafWhiteRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetCCProtectSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetCCProtectSwitchResultShape', ],
            ],
        ],
        'UpdateWebProtectSettingsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateWebProtectSettingsResultShape', ],
            ],
        ],
        'QueryWafWhiteRuleSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryWafWhiteRuleSwitchResultShape', ],
            ],
        ],
        'EnableWafBlackRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryWafWhiteRuleSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
            ],
        ],
        'UpdateWafWhiteRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'actions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'SetWafWhiteRuleSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetWafWhiteRuleSwitchResultShape', ],
            ],
        ],
        'DisableWafWhiteRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DisableWafWhiteRulesResultShape', ],
            ],
        ],
        'QuerywafBlackRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'UpdateWafBlackRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryCCProtectRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DisableWafBlackRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryIpBlackSettingStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetWafWhiteRuleSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryWafBlackRuleSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
            ],
        ],
        'UpdateWebProtectSettingsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'wafMode' => [ 'type' => 'string', 'locationName' => 'wafMode', ],
                'wafLevel' => [ 'type' => 'integer', 'locationName' => 'wafLevel', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryCCProtectRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryCCProtectRulesResultShape', ],
            ],
        ],
        'DeleteWafWhiteRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateCCProtectRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateCCProtectRuleResultShape', ],
            ],
        ],
        'SetWebProtectSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateWafWhiteRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateWafWhiteRuleResultShape', ],
            ],
        ],
        'DisableWafBlackRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DisableWafBlackRulesResultShape', ],
            ],
        ],
        'DeleteCCProtectRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ids' => [ 'type' => 'string', 'locationName' => 'ids', ],
            ],
        ],
        'QueryWebProtectSettingsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DisableWafWhiteRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteWafBlackRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ids' => [ 'type' => 'string', 'locationName' => 'ids', ],
            ],
        ],
        'SetWafBlackRuleSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryCCProtectSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
            ],
        ],
        'CreateWafWhiteRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateWafWhiteRuleResultShape', ],
            ],
        ],
        'CreateCCProtectRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'singleIpLimit' => [ 'type' => 'integer', 'locationName' => 'singleIpLimit', ],
                'blockType' => [ 'type' => 'integer', 'locationName' => 'blockType', ],
                'blockTime' => [ 'type' => 'integer', 'locationName' => 'blockTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DisableCCProtectRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DeleteWafBlackRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateWafBlackRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atOp' => [ 'type' => 'integer', 'locationName' => 'atOp', ],
                'atVal' => [ 'type' => 'string', 'locationName' => 'atVal', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryWebProtectSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QuerywafBlackRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'WafBlackRuleModel', ], ],
            ],
        ],
        'QueryWafBlackRuleSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryWafBlackRuleSwitchResultShape', ],
            ],
        ],
        'SetCCProtectSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateWafBlackRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryWebProtectSettingsResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafMode' => [ 'type' => 'string', 'locationName' => 'wafMode', ],
                'wafLevel' => [ 'type' => 'integer', 'locationName' => 'wafLevel', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'QueryWafRegionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'china' => [ 'type' => 'list', 'member' => [ 'shape' => 'WafRegionsModel', ], ],
                'foreign' => [ 'type' => 'list', 'member' => [ 'shape' => 'WafRegionsModel', ], ],
            ],
        ],
        'CreateCCProtectRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableCCProtectRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DisableCCProtectRuleResultShape', ],
            ],
        ],
        'EnableWafWhiteRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QuerywafWhiteRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DeleteCCProtectRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisableWafWhiteRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QuerywafWhiteRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'WafWhiteRuleModel', ], ],
            ],
        ],
        'UpdateCCProtectRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'singleIpLimit' => [ 'type' => 'integer', 'locationName' => 'singleIpLimit', ],
                'blockType' => [ 'type' => 'integer', 'locationName' => 'blockType', ],
                'blockTime' => [ 'type' => 'integer', 'locationName' => 'blockTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'EnableWafBlackRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetWebProtectSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'CreateWafWhiteRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'actions' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'EnableCCProtectRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'EnableCCProtectRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteWafBlackRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteWafBlackRulesResultShape', ],
            ],
        ],
        'DisableWafBlackRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetWafWhiteRuleSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetCCProtectSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'EnableWafWhiteRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'EnableWafWhiteRulesResultShape', ],
            ],
        ],
        'UpdateCCProtectRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateCCProtectRuleResultShape', ],
            ],
        ],
        'DeleteCCProtectRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteCCProtectRuleResultShape', ],
            ],
        ],
        'SetWafSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetWafSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetWafSwitchResultShape', ],
            ],
        ],
        'QueryCCProtectRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'WafCCProtectRuleModel', ], ],
            ],
        ],
        'QueryWafWhiteRuleSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'UpdateCCProtectRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryWafSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DeleteWafWhiteRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteWafWhiteRulesResultShape', ],
            ],
        ],
        'UpdateWafBlackRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atOp' => [ 'type' => 'integer', 'locationName' => 'atOp', ],
                'atVal' => [ 'type' => 'string', 'locationName' => 'atVal', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'UpdateWafWhiteRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateWebProtectSettingsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetWafBlackRuleSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryWafSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
            ],
        ],
        'SetWafSwitchRequestShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'EnableWafBlackRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'EnableWafBlackRulesResultShape', ],
            ],
        ],
        'QueryWebProtectSwitchResultShape' => [
            'type' => 'structure',
            'members' => [
                'switchStatus' => [ 'type' => 'string', 'locationName' => 'switchStatus', ],
            ],
        ],
        'QueryWafRegionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'skipType' => [ 'type' => 'string', 'locationName' => 'skipType', ],
            ],
        ],
        'EnableWafWhiteRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetWebProtectSwitchResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetWebProtectSwitchResultShape', ],
            ],
        ],
        'WafQueryAttackDetailsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'sortField' => [ 'type' => 'string', 'locationName' => 'sortField', ],
                'sortRule' => [ 'type' => 'string', 'locationName' => 'sortRule', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'WafQueryPvForAreaAndIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'areaDatas' => [ 'type' => 'list', 'member' => [ 'shape' => 'AreaData', ], ],
            ],
        ],
        'WafQueryPvForAreaAndIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'WafQueryPvResultShape' => [
            'type' => 'structure',
            'members' => [
                'pvs' => [ 'type' => 'list', 'member' => [ 'shape' => 'PvItem', ], ],
                'peakAttackPv' => [ 'type' => 'integer', 'locationName' => 'peakAttackPv', ],
                'peakTotalPv' => [ 'type' => 'integer', 'locationName' => 'peakTotalPv', ],
            ],
        ],
        'WafQueryAttackDetailsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'string', 'locationName' => 'total', ],
                'attackDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackDetail', ], ],
            ],
        ],
        'WafQueryAttackDetailsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'WafQueryAttackDetailsResultShape', ],
            ],
        ],
        'WafQueryPvForAreaAndIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'WafQueryPvForAreaAndIpResultShape', ],
            ],
        ],
        'WafQueryPvResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'WafQueryPvResultShape', ],
            ],
        ],
        'WafQueryPvRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
    ],
];
