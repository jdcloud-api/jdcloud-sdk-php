<?php
/**
 * Waf
 *
 * @category Jdcloud
 * @package  Jdcloud\Waf
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Waf;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with waf.
 *
 * @method \Jdcloud\Result describeLbOutIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLbOutIpAsync(array $args = [])
 * @method \Jdcloud\Result upgradeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise upgradeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result getAvailableCertForDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAvailableCertForDomainAsync(array $args = [])
 * @method \Jdcloud\Result bindCert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bindCertAsync(array $args = [])
 * @method \Jdcloud\Result getBpsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBpsDataAsync(array $args = [])
 * @method \Jdcloud\Result getQpsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQpsDataAsync(array $args = [])
 * @method \Jdcloud\Result getStatusCodeInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStatusCodeInfoAsync(array $args = [])
 * @method \Jdcloud\Result getMainAntiInfoNew(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMainAntiInfoNewAsync(array $args = [])
 * @method \Jdcloud\Result getEsLogDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEsLogDetailAsync(array $args = [])
 * @method \Jdcloud\Result getAntiEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAntiEventAsync(array $args = [])
 * @method \Jdcloud\Result getDomainLbConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainLbConfigAsync(array $args = [])
 * @method \Jdcloud\Result addDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addDomainAsync(array $args = [])
 * @method \Jdcloud\Result updateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainAsync(array $args = [])
 * @method \Jdcloud\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Jdcloud\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Jdcloud\Result getDomainAntiConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAntiConfigAsync(array $args = [])
 * @method \Jdcloud\Result enableCname2RsExternal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableCname2RsExternalAsync(array $args = [])
 * @method \Jdcloud\Result listMainCfg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMainCfgAsync(array $args = [])
 * @method \Jdcloud\Result disableRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRulesAsync(array $args = [])
 * @method \Jdcloud\Result enableWaf(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWafAsync(array $args = [])
 * @method \Jdcloud\Result antiModeWaf(array $args = [])
 * @method \GuzzleHttp\Promise\Promise antiModeWafAsync(array $args = [])
 * @method \Jdcloud\Result antiLevelWaf(array $args = [])
 * @method \GuzzleHttp\Promise\Promise antiLevelWafAsync(array $args = [])
 * @method \Jdcloud\Result enableWafUserDefine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWafUserDefineAsync(array $args = [])
 * @method \Jdcloud\Result setWafRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setWafRuleAsync(array $args = [])
 * @method \Jdcloud\Result delWafRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delWafRuleAsync(array $args = [])
 * @method \Jdcloud\Result listWafRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWafRulesAsync(array $args = [])
 * @method \Jdcloud\Result setWafCondition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setWafConditionAsync(array $args = [])
 * @method \Jdcloud\Result delWafCondition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delWafConditionAsync(array $args = [])
 * @method \Jdcloud\Result listWafConditions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWafConditionsAsync(array $args = [])
 * @method \Jdcloud\Result listWafFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWafFilterAsync(array $args = [])
 * @method \Jdcloud\Result listBotStdRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBotStdRulesAsync(array $args = [])
 * @method \Jdcloud\Result getWafInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWafInstanceAsync(array $args = [])
 */
class WafClient extends JdCloudClient
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
                        'service' => 'waf',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'waf'
            );
        };

        parent::__construct($args);
    }
}