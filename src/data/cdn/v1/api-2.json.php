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
                'method' => 'DELETE',
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
                'requestUri' => '/v1/liveDomain/{domain}/ipBlackList:{blackIpsEnable}',
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
        'CreateLiveDomain' => [
            'name' => 'CreateLiveDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/liveDomain:batchCreate',
            ],
            'input' => [ 'shape' => 'CreateLiveDomainRequestShape', ],
            'output' => [ 'shape' => 'CreateLiveDomainResponseShape', ],
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
        'QueryStatisticsData' => [
            'name' => 'QueryStatisticsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics',
            ],
            'input' => [ 'shape' => 'QueryStatisticsDataRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsDataResponseShape', ],
        ],
        'QueryStatisticsDataGroupByArea' => [
            'name' => 'QueryStatisticsDataGroupByArea',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:groupByArea',
            ],
            'input' => [ 'shape' => 'QueryStatisticsDataGroupByAreaRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsDataGroupByAreaResponseShape', ],
        ],
        'QueryStatisticsDataGroupSum' => [
            'name' => 'QueryStatisticsDataGroupSum',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/statistics:groupSum',
            ],
            'input' => [ 'shape' => 'QueryStatisticsDataGroupSumRequestShape', ],
            'output' => [ 'shape' => 'QueryStatisticsDataGroupSumResponseShape', ],
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
    ],
    'shapes' => [
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
        'DomainSourceInfo' => [
            'type' => 'structure',
            'members' => [
                'priority' => [ 'type' => 'integer', 'locationName' => 'priority', ],
                'sourceHost' => [ 'type' => 'string', 'locationName' => 'sourceHost', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
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
        'QueryHttpHeaderResp' => [
            'type' => 'structure',
            'members' => [
                'headerType' => [ 'type' => 'string', 'locationName' => 'headerType', ],
                'headerName' => [ 'type' => 'string', 'locationName' => 'headerName', ],
                'headerValue' => [ 'type' => 'string', 'locationName' => 'headerValue', ],
                'headerOp' => [ 'type' => 'string', 'locationName' => 'headerOp', ],
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
        'DomainGroupItem' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'primaryDomain' => [ 'type' => 'string', 'locationName' => 'primaryDomain', ],
                'shareCache' => [ 'type' => 'string', 'locationName' => 'shareCache', ],
                'domainGroupName' => [ 'type' => 'string', 'locationName' => 'domainGroupName', ],
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
        'ProtocolConvert' => [
            'type' => 'structure',
            'members' => [
                'sourceProtocol' => [ 'type' => 'string', 'locationName' => 'sourceProtocol', ],
                'targetProtocol' => [ 'type' => 'string', 'locationName' => 'targetProtocol', ],
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
        'StatisticsTopUrlData' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'urls' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsTopUrlItem', ], ],
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
        'StatisticsTopUrlItem' => [
            'type' => 'structure',
            'members' => [
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'value' => [ 'type' => 'integer', 'locationName' => 'value', ],
                'fullValue' => [ 'type' => 'object', 'locationName' => 'fullValue', ],
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
        'StatisticsWithAreaGroupDetailItem' => [
            'type' => 'structure',
            'members' => [
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'ispStat' => [ 'type' => 'object', 'locationName' => 'ispStat', ],
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
        'StatisticsDataItem' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'data' => [ 'type' => 'object', 'locationName' => 'data', ],
            ],
        ],
        'OperateShareCacheResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'OperateShareCacheResultShape', ],
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
        'OperateShareCacheResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SetUserAgentConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteHttpHeaderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteHttpHeaderResultShape', ],
            ],
        ],
        'DeleteHttpHeaderResultShape' => [
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
        'QueryDefaultHttpHeaderKeyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDefaultHttpHeaderKeyResultShape', ],
            ],
        ],
        'SetUserAgentConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetUserAgentConfigResultShape', ],
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
        'SetAccesskeyConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetAccesskeyConfigResultShape', ],
            ],
        ],
        'SetHttpHeaderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetHttpHeaderResultShape', ],
            ],
        ],
        'PreviewCertificateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'PreviewCertificateResultShape', ],
            ],
        ],
        'QueryMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryMonitorResultShape', ],
            ],
        ],
        'OperateShareCacheRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetIgnoreQueryStringResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'SetVideoDraftRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetHttpTypeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'monitorId' => [ 'type' => 'long', 'locationName' => 'monitorId', ],
            ],
        ],
        'SetReferResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetReferResultShape', ],
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
        'QueryHttpHeaderRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteCacheRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'configId' => [ 'type' => '', 'locationName' => 'configId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetIpBlackListResultShape', ],
            ],
        ],
        'SetIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => '', 'locationName' => 'ips', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'StopMonitorResultShape' => [
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
        'QueryIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'QueryHttpHeaderResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryHttpHeaderResp', ], ],
            ],
        ],
        'StopMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'DeleteHttpHeaderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'headerType' => [ 'type' => '', 'locationName' => 'headerType', ],
                'headerName' => [ 'type' => '', 'locationName' => 'headerName', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetIgnoreQueryStringResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetIgnoreQueryStringResultShape', ],
            ],
        ],
        'OperateIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'OperateIpBlackListResultShape', ],
            ],
        ],
        'OperateIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateCacheRuleResultShape' => [
            'type' => 'structure',
            'members' => [
                'configId' => [ 'type' => 'long', 'locationName' => 'configId', ],
            ],
        ],
        'SetSourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryDefaultHttpHeaderKeyRequestShape' => [
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
        'QueryUserAgentResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'userAgentType' => [ 'type' => 'string', 'locationName' => 'userAgentType', ],
                'userAgentList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'allowNoUserAgentHeader' => [ 'type' => 'string', 'locationName' => 'allowNoUserAgentHeader', ],
            ],
        ],
        'SetRangeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateCacheRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateCacheRuleResultShape', ],
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
        'StopMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'StopMonitorResultShape', ],
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
        'QueryMonitorResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cycle' => [ 'type' => 'integer', 'locationName' => 'cycle', ],
                'monitorPath' => [ 'type' => 'string', 'locationName' => 'monitorPath', ],
                'httpRequestHeader' => [ 'type' => 'object', 'locationName' => 'httpRequestHeader', ],
            ],
        ],
        'SetAccesskeyConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetMonitorResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetMonitorResultShape', ],
            ],
        ],
        'QueryDefaultHttpHeaderKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'reqDefaultHttpHeaderKey' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'respDefaultHttpHeaderKey' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'SetHttpTypeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'httpType' => [ 'type' => '', 'locationName' => 'httpType', ],
                'certificate' => [ 'type' => '', 'locationName' => 'certificate', ],
                'rsaKey' => [ 'type' => '', 'locationName' => 'rsaKey', ],
                'jumpType' => [ 'type' => '', 'locationName' => 'jumpType', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetVideoDraftResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetRangeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
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
        'DeleteCacheRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'QueryMonitorRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'DeleteCacheRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteCacheRuleResultShape', ],
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
        'QueryUserAgentRequestShape' => [
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
        'SetRangeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetRangeResultShape', ],
            ],
        ],
        'UpdateCacheRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'UpdateCacheRuleResultShape', ],
            ],
        ],
        'QueryIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryIpBlackListResultShape', ],
            ],
        ],
        'SetReferResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateCacheRuleResultShape' => [
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
        'QueryUserAgentResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryUserAgentResultShape', ],
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
        'OperateIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetHttpHeaderResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetIgnoreQueryStringRequestShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => '', 'locationName' => 'status', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'UpdateDomainGroupResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'QueryDomainsNotInGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryDomainsNotInGroupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'QueryDomainsNotInGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'BatchDeleteDomainGroupResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'BatchDeleteDomainGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchDeleteDomainGroupResultShape', ],
            ],
        ],
        'CreateDomainGroupResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'CreateDomainGroupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateDomainGroupResultShape', ],
            ],
        ],
        'QueryDomainsNotInGroupResultShape' => [
            'type' => 'structure',
            'members' => [
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
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
        'BatchDeleteDomainGroupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
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
        'QueryDomainGroupDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryDomainGroupDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
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
        'BatchCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'BatchCreateResultShape', ],
            ],
        ],
        'StartDomainResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'QueryDomainConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryDomainConfigResultShape', ],
            ],
        ],
        'DeleteDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'CreateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateDomainResultShape', ],
            ],
        ],
        'DeleteDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BatchCreateResultShape' => [
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
        'QueryOssBucketsRequestShape' => [
            'type' => 'structure',
            'members' => [
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
        'QueryOssBucketsResultShape' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'ossBuckets' => [ 'type' => 'list', 'member' => [ 'type' => 'object', ], ],
            ],
        ],
        'StopDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'CreateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteDomainResultShape', ],
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
        'StopDomainResultShape' => [
            'type' => 'structure',
            'members' => [
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
        'QueryDomainConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'GetDomainDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'GetDomainListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'GetDomainListResultShape', ],
            ],
        ],
        'StartDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
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
            ],
        ],
        'StartDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'StartDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetLiveDomainIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => '', 'locationName' => 'ips', ],
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
        'OperateLiveDomainIpBlackListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'blackIpsEnable' => [ 'type' => 'string', 'locationName' => 'blackIpsEnable', ],
            ],
        ],
        'SetProtocolConvertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'certificate' => [ 'type' => '', 'locationName' => 'certificate', ],
                'rsaKey' => [ 'type' => '', 'locationName' => 'rsaKey', ],
                'protocolConverts' => [ 'type' => '', 'locationName' => 'protocolConverts', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'SetLiveDomainIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainIpBlackListResultShape', ],
            ],
        ],
        'SetProtocolConvertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetProtocolConvertResultShape', ],
            ],
        ],
        'SetLiveDomainIpBlackListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetProtocolConvertResultShape' => [
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
        'SetLiveDomainBackSourceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveDomainBackSourceHostResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainBackSourceHostResultShape', ],
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
        'OperateLiveDomainIpBlackListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'OperateLiveDomainIpBlackListResultShape', ],
            ],
        ],
        'SetLiveDomainBackSourceHostResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetLiveDomainReferResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainReferResultShape', ],
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
        'SetLiveDomainBackSourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'SetLiveDomainBackSourceResultShape', ],
            ],
        ],
        'CreateLiveDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateLiveDomainResultShape', ],
            ],
        ],
        'QueryLiveDomainDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'CreateLiveDomainResultShape' => [
            'type' => 'structure',
            'members' => [
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
            ],
        ],
        'QueryLiveDomainDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'QueryLiveDomainDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateLiveDomainRequestShape' => [
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
        'QueryStatisticsTopIpResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ipData' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsTopIpData', ], ],
            ],
        ],
        'QueryStatisticsDataGroupByAreaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsDataGroupByAreaResultShape', ],
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
        'QueryStatisticsDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsDataItem', ], ],
            ],
        ],
        'QueryStatisticsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsDataResultShape', ],
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
        'QueryStatisticsTopUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsTopUrlResultShape', ],
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
        'QueryStatisticsTopIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsTopIpResultShape', ],
            ],
        ],
        'QueryStatisticsDataGroupSumResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'QueryStatisticsDataGroupSumResultShape', ],
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
        'QueryStatisticsDataGroupByAreaResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatisticsWithAreaGroupDetail', ], ],
            ],
        ],
    ],
];
