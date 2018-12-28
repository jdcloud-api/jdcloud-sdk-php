<?php
/**
 * Cdn
 *
 * @category Jdcloud
 * @package  Jdcloud\Cdn
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cdn;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cdn.
 *
 * @method \Jdcloud\Result previewCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise previewCertificateAsync(array $args = [])
 * @method \Jdcloud\Result queryDefaultHttpHeaderKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDefaultHttpHeaderKeyAsync(array $args = [])
 * @method \Jdcloud\Result queryIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result setIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result operateIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result createCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheRuleAsync(array $args = [])
 * @method \Jdcloud\Result updateCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCacheRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheRuleAsync(array $args = [])
 * @method \Jdcloud\Result queryHttpHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryHttpHeaderAsync(array $args = [])
 * @method \Jdcloud\Result setHttpHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setHttpHeaderAsync(array $args = [])
 * @method \Jdcloud\Result deleteHttpHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHttpHeaderAsync(array $args = [])
 * @method \Jdcloud\Result setVideoDraft(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setVideoDraftAsync(array $args = [])
 * @method \Jdcloud\Result setRange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRangeAsync(array $args = [])
 * @method \Jdcloud\Result setIgnoreQueryString(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIgnoreQueryStringAsync(array $args = [])
 * @method \Jdcloud\Result queryUserAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryUserAgentAsync(array $args = [])
 * @method \Jdcloud\Result setUserAgentConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setUserAgentConfigAsync(array $args = [])
 * @method \Jdcloud\Result queryAccesskeyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAccesskeyConfigAsync(array $args = [])
 * @method \Jdcloud\Result setAccesskeyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAccesskeyConfigAsync(array $args = [])
 * @method \Jdcloud\Result setRefer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setReferAsync(array $args = [])
 * @method \Jdcloud\Result queryMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryMonitorAsync(array $args = [])
 * @method \Jdcloud\Result setMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setMonitorAsync(array $args = [])
 * @method \Jdcloud\Result stopMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMonitorAsync(array $args = [])
 * @method \Jdcloud\Result setSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setSourceAsync(array $args = [])
 * @method \Jdcloud\Result operateShareCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateShareCacheAsync(array $args = [])
 * @method \Jdcloud\Result setHttpType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setHttpTypeAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainGroupList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainGroupListAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainGroupDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainGroupDetailAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainsNotInGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainsNotInGroupAsync(array $args = [])
 * @method \Jdcloud\Result updateDomainGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainGroupAsync(array $args = [])
 * @method \Jdcloud\Result createDomainGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainGroupAsync(array $args = [])
 * @method \Jdcloud\Result batchDeleteDomainGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteDomainGroupAsync(array $args = [])
 * @method \Jdcloud\Result getDomainList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainListAsync(array $args = [])
 * @method \Jdcloud\Result getDomainDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainDetailAsync(array $args = [])
 * @method \Jdcloud\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Jdcloud\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Jdcloud\Result startDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDomainAsync(array $args = [])
 * @method \Jdcloud\Result stopDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDomainAsync(array $args = [])
 * @method \Jdcloud\Result queryOssBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryOssBucketsAsync(array $args = [])
 * @method \Jdcloud\Result batchCreate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainConfigAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainBackSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainBackSourceAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainRefer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainReferAsync(array $args = [])
 * @method \Jdcloud\Result operateLiveDomainIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateLiveDomainIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainBackSourceHost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainBackSourceHostAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result setProtocolConvert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setProtocolConvertAsync(array $args = [])
 * @method \Jdcloud\Result createLiveDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLiveDomainAsync(array $args = [])
 * @method \Jdcloud\Result queryLiveDomainDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLiveDomainDetailAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsDataGroupByArea(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataGroupByAreaAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsDataGroupSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataGroupSumAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsTopIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsTopIpAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsTopUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsTopUrlAsync(array $args = [])
 */
class CdnClient extends JdCloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'cdn',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cdn'
            );
        };

        parent::__construct($args);
    }
}