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
        'QueryStatisticsTopUrl' => [
            'name' => 'QueryStatisticsTopUrl',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:topUrl',
            ],
            'input' => [ 'shape' => 'QueryStatisticsTopUrlRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsTopUrlResponseShape', ],
        ],
    ],
    'shapes' => [
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
                'realFps' => [ 'type' => 'long', 'locationName' => 'realFps', ],
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
        'ForbiddenStream' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'forbiddenType' => [ 'type' => 'string', 'locationName' => 'forbiddenType', ],
                'ttl' => [ 'type' => 'long', 'locationName' => 'ttl', ],
                'forbiddenTypeDesc' => [ 'type' => 'string', 'locationName' => 'forbiddenTypeDesc', ],
            ],
        ],
        'DeleteStream' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
            ],
        ],
        'SimpleGroupItem' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'long', 'locationName' => 'id', ],
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
        'ProtocolConvert' => [
            'type' => 'structure',
            'members' => [
                'sourceProtocol' => [ 'type' => 'string', 'locationName' => 'sourceProtocol', ],
                'targetProtocol' => [ 'type' => 'string', 'locationName' => 'targetProtocol', ],
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
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
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
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
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
        'ForbiddenStreamHistoryItem' => [
            'type' => 'structure',
            'members' => [
                'stream' => [ 'type' => 'string', 'locationName' => 'stream', ],
                'app' => [ 'type' => 'string', 'locationName' => 'app', ],
                'forbiddenType' => [ 'type' => 'string', 'locationName' => 'forbiddenType', ],
                'ttl' => [ 'type' => 'long', 'locationName' => 'ttl', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'forbiddenTypeDesc' => [ 'type' => 'string', 'locationName' => 'forbiddenTypeDesc', ],
            ],
        ],
        'FeeDomain' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'feeType' => [ 'type' => 'integer', 'locationName' => 'feeType', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'IpSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'master' => [ 'type' => 'integer', 'locationName' => 'master', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'ratio' => [ 'type' => 'double', 'locationName' => 'ratio', ],
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
        'SslCertModel' => [
            'type' => 'structure',
            'members' => [
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'deletable' => [ 'type' => 'integer', 'locationName' => 'deletable', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downloadable' => [ 'type' => 'integer', 'locationName' => 'downloadable', ],
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
                'ispStat' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'DomainLog' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'md5' => [ 'type' => 'string', 'locationName' => 'md5', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'size' => [ 'type' => 'long', 'locationName' => 'size', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
            ],
        ],
        'StatisticsTopIpItem' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'fullValue' => [ 'type' => 'object', 'locationName' => 'fullValue', ],
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
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'StatisticsTopUrlItem' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'fullValue' => [ 'type' => 'object', 'locationName' => 'fullValue', ],
            ],
        ],
        'StatisticsGroupSumDataItem' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'DomainsLog' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'domainLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainLog', ], ],
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
        'AccessUserlogModel' => [
            'type' => 'structure',
            'members' => [
                'logUrl' => [ 'type' => 'string', 'locationName' => 'logUrl', ],
                'logSize' => [ 'type' => 'long', 'locationName' => 'logSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
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
                'allType' => [ 'type' => '', 'locationName' => 'allType', ],
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
            ],
        ],
        'SetFollowRedirectRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetSourceResultShape' => [
            'type' => 'structure',
            'members' => [
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
                'headerType' => [ 'type' => '', 'locationName' => 'headerType', ],
                'headerName' => [ 'type' => '', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => '', 'locationName' => 'headerValue', ],
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
        'SetVideoDraftRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
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
        'DeleteHttpHeaderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'headerType' => [ 'type' => '', 'locationName' => 'headerType', ],
                'headerName' => [ 'type' => '', 'locationName' => 'headerName', ],
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
        'UpdateCacheRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryDefaultHttpHeaderKeyRequestShape' => [
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
        'DeleteHttpHeaderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetFollowSourceProtocolRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cycle' => [ 'type' => '', 'locationName' => 'cycle', ],
                'monitorPath' => [ 'type' => '', 'locationName' => 'monitorPath', ],
                'httpRequestHeader' => [ 'type' => '', 'locationName' => 'httpRequestHeader', ],
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
        'SetReferRequestShape' => [
            'type' => 'structure',
            'members' => [
                'referType' => [ 'type' => '', 'locationName' => 'referType', ],
                'referList' => [ 'type' => '', 'locationName' => 'referList', ],
                'allowNoReferHeader' => [ 'type' => '', 'locationName' => 'allowNoReferHeader', ],
                'allowNullReferHeader' => [ 'type' => '', 'locationName' => 'allowNullReferHeader', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryUserAgentRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DeleteCacheRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryAccesskeyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryAccesskeyConfigResultShape', ],
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
                'status' => [ 'type' => '', 'locationName' => 'status', ],
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
        'SetSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetSourceResultShape', ],
            ],
        ],
        'QueryFollowSourceProtocolResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryFollowSourceProtocolResultShape', ],
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
        'QueryUserAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryUserAgentResultShape', ],
            ],
        ],
        'SetIgnoreQueryStringRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
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
        'CreateCacheRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'weight' => [ 'type' => '', 'locationName' => 'weight', ],
                'ttl' => [ 'type' => '', 'locationName' => 'ttl', ],
                'contents' => [ 'type' => '', 'locationName' => 'contents', ],
                'cacheType' => [ 'type' => '', 'locationName' => 'cacheType', ],
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
                'status' => [ 'type' => '', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'UpdateCacheRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'weight' => [ 'type' => '', 'locationName' => 'weight', ],
                'ttl' => [ 'type' => '', 'locationName' => 'ttl', ],
                'contents' => [ 'type' => '', 'locationName' => 'contents', ],
                'cacheType' => [ 'type' => '', 'locationName' => 'cacheType', ],
                'configId' => [ 'type' => '', 'locationName' => 'configId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetAccesskeyConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accesskeyType' => [ 'type' => '', 'locationName' => 'accesskeyType', ],
                'accesskeyKey' => [ 'type' => '', 'locationName' => 'accesskeyKey', ],
                'accesskeyKeep' => [ 'type' => '', 'locationName' => 'accesskeyKeep', ],
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
                'ips' => [ 'type' => '', 'locationName' => 'ips', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetFollowSourceProtocolResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryFollowSourceProtocolResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'followProtocolStatus' => [ 'type' => 'string', 'locationName' => 'followProtocolStatus', ],
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
                'httpType' => [ 'type' => '', 'locationName' => 'httpType', ],
                'certificate' => [ 'type' => '', 'locationName' => 'certificate', ],
                'rsaKey' => [ 'type' => '', 'locationName' => 'rsaKey', ],
                'jumpType' => [ 'type' => '', 'locationName' => 'jumpType', ],
                'certFrom' => [ 'type' => '', 'locationName' => 'certFrom', ],
                'sslCertId' => [ 'type' => '', 'locationName' => 'sslCertId', ],
                'syncToSsl' => [ 'type' => '', 'locationName' => 'syncToSsl', ],
                'certName' => [ 'type' => '', 'locationName' => 'certName', ],
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
        'SetReferResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OperateShareCacheRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
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
        'UpdateCacheRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateCacheRuleResultShape', ],
            ],
        ],
        'QueryIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'PreviewCertificateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => '', 'locationName' => 'content', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'CreateCacheRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'configId' => [ 'type' => 'long', 'locationName' => 'configId', ],
            ],
        ],
        'SetUserAgentConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cycle' => [ 'type' => 'integer', 'locationName' => 'cycle', ],
                'monitorPath' => [ 'type' => 'string', 'locationName' => 'monitorPath', ],
                'httpRequestHeader' => [ 'type' => 'object', 'locationName' => 'httpRequestHeader', ],
            ],
        ],
        'SetHttpTypeResultShape' => [
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
                'userAgentType' => [ 'type' => '', 'locationName' => 'userAgentType', ],
                'userAgentList' => [ 'type' => '', 'locationName' => 'userAgentList', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'OperateIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteCacheRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'configId' => [ 'type' => '', 'locationName' => 'configId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetIgnoreQueryStringResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetSourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sourceType' => [ 'type' => '', 'locationName' => 'sourceType', ],
                'backSourceType' => [ 'type' => '', 'locationName' => 'backSourceType', ],
                'ipSource' => [ 'type' => '', 'locationName' => 'ipSource', ],
                'domainSource' => [ 'type' => '', 'locationName' => 'domainSource', ],
                'ossSource' => [ 'type' => '', 'locationName' => 'ossSource', ],
                'defaultSourceHost' => [ 'type' => '', 'locationName' => 'defaultSourceHost', ],
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
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
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
                'domains' => [ 'type' => '', 'locationName' => 'domains', ],
                'primaryDomain' => [ 'type' => '', 'locationName' => 'primaryDomain', ],
                'shareCache' => [ 'type' => '', 'locationName' => 'shareCache', ],
                'domainGroupName' => [ 'type' => '', 'locationName' => 'domainGroupName', ],
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
                'shareCache' => [ 'type' => '', 'locationName' => 'shareCache', ],
                'primaryDomain' => [ 'type' => '', 'locationName' => 'primaryDomain', ],
                'domainGroupName' => [ 'type' => '', 'locationName' => 'domainGroupName', ],
                'domains' => [ 'type' => '', 'locationName' => 'domains', ],
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
            ],
        ],
        'CreateDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sourceType' => [ 'type' => '', 'locationName' => 'sourceType', ],
                'cdnType' => [ 'type' => '', 'locationName' => 'cdnType', ],
                'backSourceType' => [ 'type' => '', 'locationName' => 'backSourceType', ],
                'dailyBandWidth' => [ 'type' => '', 'locationName' => 'dailyBandWidth', ],
                'quaility' => [ 'type' => '', 'locationName' => 'quaility', ],
                'maxFileSize' => [ 'type' => '', 'locationName' => 'maxFileSize', ],
                'minFileSize' => [ 'type' => '', 'locationName' => 'minFileSize', ],
                'sumFileSize' => [ 'type' => '', 'locationName' => 'sumFileSize', ],
                'avgFileSize' => [ 'type' => '', 'locationName' => 'avgFileSize', ],
                'defaultSourceHost' => [ 'type' => '', 'locationName' => 'defaultSourceHost', ],
                'httpType' => [ 'type' => '', 'locationName' => 'httpType', ],
                'ipSource' => [ 'type' => '', 'locationName' => 'ipSource', ],
                'domainSource' => [ 'type' => '', 'locationName' => 'domainSource', ],
                'ossSource' => [ 'type' => '', 'locationName' => 'ossSource', ],
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
                'domains' => [ 'type' => '', 'locationName' => 'domains', ],
                'sourceType' => [ 'type' => '', 'locationName' => 'sourceType', ],
                'cdnType' => [ 'type' => '', 'locationName' => 'cdnType', ],
                'backSourceType' => [ 'type' => '', 'locationName' => 'backSourceType', ],
                'dailyBandWidth' => [ 'type' => '', 'locationName' => 'dailyBandWidth', ],
                'quaility' => [ 'type' => '', 'locationName' => 'quaility', ],
                'maxFileSize' => [ 'type' => '', 'locationName' => 'maxFileSize', ],
                'minFileSize' => [ 'type' => '', 'locationName' => 'minFileSize', ],
                'sumFileSize' => [ 'type' => '', 'locationName' => 'sumFileSize', ],
                'avgFileSize' => [ 'type' => '', 'locationName' => 'avgFileSize', ],
                'defaultSourceHost' => [ 'type' => '', 'locationName' => 'defaultSourceHost', ],
                'httpType' => [ 'type' => '', 'locationName' => 'httpType', ],
                'ipSource' => [ 'type' => '', 'locationName' => 'ipSource', ],
                'domainSource' => [ 'type' => '', 'locationName' => 'domainSource', ],
                'ossSource' => [ 'type' => '', 'locationName' => 'ossSource', ],
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
            ],
        ],
        'BatchCreateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'OperateLiveDomainIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'blackIpsEnable' => [ 'type' => '', 'locationName' => 'blackIpsEnable', ],
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
                'referType' => [ 'type' => '', 'locationName' => 'referType', ],
                'referList' => [ 'type' => '', 'locationName' => 'referList', ],
                'allowNoReferHeader' => [ 'type' => '', 'locationName' => 'allowNoReferHeader', ],
                'allowNullReferHeader' => [ 'type' => '', 'locationName' => 'allowNullReferHeader', ],
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
                'deleteStreams' => [ 'type' => '', 'locationName' => 'deleteStreams', ],
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
                'certificate' => [ 'type' => '', 'locationName' => 'certificate', ],
                'rsaKey' => [ 'type' => '', 'locationName' => 'rsaKey', ],
                'certFrom' => [ 'type' => '', 'locationName' => 'certFrom', ],
                'sslCertId' => [ 'type' => '', 'locationName' => 'sslCertId', ],
                'syncToSsl' => [ 'type' => '', 'locationName' => 'syncToSsl', ],
                'certName' => [ 'type' => '', 'locationName' => 'certName', ],
                'protocolConverts' => [ 'type' => '', 'locationName' => 'protocolConverts', ],
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
                'sourceType' => [ 'type' => '', 'locationName' => 'sourceType', ],
                'backSourceType' => [ 'type' => '', 'locationName' => 'backSourceType', ],
                'defaultSourceHost' => [ 'type' => '', 'locationName' => 'defaultSourceHost', ],
                'domainSource' => [ 'type' => '', 'locationName' => 'domainSource', ],
                'ipSource' => [ 'type' => '', 'locationName' => 'ipSource', ],
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
                'sourceHost' => [ 'type' => '', 'locationName' => 'sourceHost', ],
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
                'accesskeyType' => [ 'type' => '', 'locationName' => 'accesskeyType', ],
                'accesskeyKey' => [ 'type' => '', 'locationName' => 'accesskeyKey', ],
                'authLifeTime' => [ 'type' => '', 'locationName' => 'authLifeTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetLiveDomainIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => '', 'locationName' => 'ips', ],
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
                'playDomain' => [ 'type' => '', 'locationName' => 'playDomain', ],
                'publishDomain' => [ 'type' => '', 'locationName' => 'publishDomain', ],
                'sourceType' => [ 'type' => '', 'locationName' => 'sourceType', ],
                'backHttpType' => [ 'type' => '', 'locationName' => 'backHttpType', ],
                'defaultSourceHost' => [ 'type' => '', 'locationName' => 'defaultSourceHost', ],
                'siteType' => [ 'type' => '', 'locationName' => 'siteType', ],
                'backSourceType' => [ 'type' => '', 'locationName' => 'backSourceType', ],
                'ipSource' => [ 'type' => '', 'locationName' => 'ipSource', ],
                'domainSource' => [ 'type' => '', 'locationName' => 'domainSource', ],
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
                'urlList' => [ 'type' => '', 'locationName' => 'urlList', ],
            ],
        ],
        'CreateLiveDomainPrefecthTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'urlList' => [ 'type' => '', 'locationName' => 'urlList', ],
                'prefetchTime' => [ 'type' => '', 'locationName' => 'prefetchTime', ],
                'action' => [ 'type' => '', 'locationName' => 'action', ],
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
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'keyword' => [ 'type' => '', 'locationName' => 'keyword', ],
                'taskId' => [ 'type' => '', 'locationName' => 'taskId', ],
                'taskStatus' => [ 'type' => '', 'locationName' => 'taskStatus', ],
                'taskType' => [ 'type' => '', 'locationName' => 'taskType', ],
                'pageNumber' => [ 'type' => '', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => '', 'locationName' => 'pageSize', ],
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
                'taskType' => [ 'type' => '', 'locationName' => 'taskType', ],
                'urlItems' => [ 'type' => '', 'locationName' => 'urlItems', ],
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
                'taskType' => [ 'type' => '', 'locationName' => 'taskType', ],
                'urlItems' => [ 'type' => '', 'locationName' => 'urlItems', ],
            ],
        ],
        'CreateRefreshTaskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => '', 'locationName' => 'taskType', ],
                'urls' => [ 'type' => '', 'locationName' => 'urls', ],
            ],
        ],
        'QueryRefreshTaskByIdsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskIds' => [ 'type' => '', 'locationName' => 'taskIds', ],
                'keyword' => [ 'type' => '', 'locationName' => 'keyword', ],
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
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'commonName' => [ 'type' => 'string', 'locationName' => 'commonName', ],
                'certType' => [ 'type' => 'string', 'locationName' => 'certType', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'deletable' => [ 'type' => 'integer', 'locationName' => 'deletable', ],
                'digest' => [ 'type' => 'string', 'locationName' => 'digest', ],
                'aliasName' => [ 'type' => 'string', 'locationName' => 'aliasName', ],
                'dnsNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'downloadable' => [ 'type' => 'integer', 'locationName' => 'downloadable', ],
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
        'QueryDomainsLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'logs' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainsLog', ], ],
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
        'QueryDomainsLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => '', 'locationName' => 'domains', ],
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'interval' => [ 'type' => '', 'locationName' => 'interval', ],
                'logType' => [ 'type' => '', 'locationName' => 'logType', ],
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
        'QueryStatisticsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsDataResultShape', ],
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
        'QueryLiveStatisticsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'appName' => [ 'type' => '', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => '', 'locationName' => 'streamName', ],
                'subDomain' => [ 'type' => '', 'locationName' => 'subDomain', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'reqMethod' => [ 'type' => '', 'locationName' => 'reqMethod', ],
                'scheme' => [ 'type' => '', 'locationName' => 'scheme', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
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
        'QueryStatisticsTopIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ipData' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsTopIpData', ], ],
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
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => '', 'locationName' => 'groupBy', ],
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
        'QueryStatisticsDataGroupSumResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsGroupSumDataItem', ], ],
            ],
        ],
        'QueryStatisticsDataGroupByAreaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => '', 'locationName' => 'subDomain', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'origin' => [ 'type' => '', 'locationName' => 'origin', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => '', 'locationName' => 'groupBy', ],
            ],
        ],
        'QueryMixTrafficGroupSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryMixTrafficGroupSumResultShape', ],
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
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => '', 'locationName' => 'subDomain', ],
                'appName' => [ 'type' => '', 'locationName' => 'appName', ],
                'streamName' => [ 'type' => '', 'locationName' => 'streamName', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'scheme' => [ 'type' => '', 'locationName' => 'scheme', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => '', 'locationName' => 'groupBy', ],
                'reqMethod' => [ 'type' => '', 'locationName' => 'reqMethod', ],
            ],
        ],
        'QueryDomainLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'interval' => [ 'type' => '', 'locationName' => 'interval', ],
                'logType' => [ 'type' => '', 'locationName' => 'logType', ],
                'pageSize' => [ 'type' => '', 'locationName' => 'pageSize', ],
                'pageNumber' => [ 'type' => '', 'locationName' => 'pageNumber', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryDomainLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainLogResultShape', ],
            ],
        ],
        'QueryMixStatisticsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
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
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => '', 'locationName' => 'subDomain', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'origin' => [ 'type' => '', 'locationName' => 'origin', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => '', 'locationName' => 'groupBy', ],
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
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'appName' => [ 'type' => '', 'locationName' => 'appName', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'streamName' => [ 'type' => '', 'locationName' => 'streamName', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
                'groupBy' => [ 'type' => '', 'locationName' => 'groupBy', ],
                'subDomain' => [ 'type' => '', 'locationName' => 'subDomain', ],
                'scheme' => [ 'type' => '', 'locationName' => 'scheme', ],
                'reqMethod' => [ 'type' => '', 'locationName' => 'reqMethod', ],
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
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => '', 'locationName' => 'subDomain', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'origin' => [ 'type' => '', 'locationName' => 'origin', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
            ],
        ],
        'QueryStatisticsTopUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => '', 'locationName' => 'subDomain', ],
                'size' => [ 'type' => '', 'locationName' => 'size', ],
                'topBy' => [ 'type' => '', 'locationName' => 'topBy', ],
            ],
        ],
        'QueryMixStatisticsWithAreaDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'fields' => [ 'type' => '', 'locationName' => 'fields', ],
                'area' => [ 'type' => '', 'locationName' => 'area', ],
                'isp' => [ 'type' => '', 'locationName' => 'isp', ],
                'period' => [ 'type' => '', 'locationName' => 'period', ],
            ],
        ],
        'QueryLiveTrafficGroupSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryLiveTrafficGroupSumResultShape', ],
            ],
        ],
        'QueryStatisticsTopIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => '', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => '', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => '', 'locationName' => 'domain', ],
                'subDomain' => [ 'type' => '', 'locationName' => 'subDomain', ],
                'size' => [ 'type' => '', 'locationName' => 'size', ],
                'topBy' => [ 'type' => '', 'locationName' => 'topBy', ],
            ],
        ],
        'QueryDomainsLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainsLogResultShape', ],
            ],
        ],
    ],
];
