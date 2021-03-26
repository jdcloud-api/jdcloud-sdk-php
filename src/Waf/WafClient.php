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
 * @method \Jdcloud\Result addIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addIpsAsync(array $args = [])
 * @method \Jdcloud\Result updateIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIpsAsync(array $args = [])
 * @method \Jdcloud\Result listIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIpsAsync(array $args = [])
 * @method \Jdcloud\Result delIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delIpsAsync(array $args = [])
 * @method \Jdcloud\Result setWafCondition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setWafConditionAsync(array $args = [])
 * @method \Jdcloud\Result delWafCondition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delWafConditionAsync(array $args = [])
 * @method \Jdcloud\Result listWafConditions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWafConditionsAsync(array $args = [])
 * @method \Jdcloud\Result listWafFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWafFilterAsync(array $args = [])
 * @method \Jdcloud\Result enableBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableBotAsync(array $args = [])
 * @method \Jdcloud\Result enableUsrBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableUsrBotAsync(array $args = [])
 * @method \Jdcloud\Result setBotStdRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setBotStdRulesAsync(array $args = [])
 * @method \Jdcloud\Result listBotStdRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBotStdRulesAsync(array $args = [])
 * @method \Jdcloud\Result addBotUsrRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addBotUsrRuleAsync(array $args = [])
 * @method \Jdcloud\Result updateBotUsrRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBotUsrRuleAsync(array $args = [])
 * @method \Jdcloud\Result listBotUsrRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBotUsrRulesAsync(array $args = [])
 * @method \Jdcloud\Result delBotUsrRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delBotUsrRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableBotThreatIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableBotThreatIpAsync(array $args = [])
 * @method \Jdcloud\Result setBotThreatIpRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setBotThreatIpRuleAsync(array $args = [])
 * @method \Jdcloud\Result listBotThreatIpRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBotThreatIpRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableRisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRiskAsync(array $args = [])
 * @method \Jdcloud\Result enableRiskAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRiskAccountAsync(array $args = [])
 * @method \Jdcloud\Result enableRiskCtl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRiskCtlAsync(array $args = [])
 * @method \Jdcloud\Result setRiskRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRiskRuleAsync(array $args = [])
 * @method \Jdcloud\Result listRiskRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRiskRulesAsync(array $args = [])
 * @method \Jdcloud\Result delRiskRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delRiskRuleAsync(array $args = [])
 * @method \Jdcloud\Result setRiskJs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRiskJsAsync(array $args = [])
 * @method \Jdcloud\Result listRiskJs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRiskJsAsync(array $args = [])
 * @method \Jdcloud\Result delRiskJs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delRiskJsAsync(array $args = [])
 * @method \Jdcloud\Result setJsPage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setJsPageAsync(array $args = [])
 * @method \Jdcloud\Result describeJsPages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJsPagesAsync(array $args = [])
 * @method \Jdcloud\Result delJsPage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delJsPageAsync(array $args = [])
 * @method \Jdcloud\Result listRiskConfDefault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRiskConfDefaultAsync(array $args = [])
 * @method \Jdcloud\Result setRiskEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRiskEventAsync(array $args = [])
 * @method \Jdcloud\Result listRiskEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRiskEventsAsync(array $args = [])
 * @method \Jdcloud\Result delRiskEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delRiskEventsAsync(array $args = [])
 * @method \Jdcloud\Result setRiskPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRiskPolicyAsync(array $args = [])
 * @method \Jdcloud\Result listRiskPolicys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRiskPolicysAsync(array $args = [])
 * @method \Jdcloud\Result delRiskPolicys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delRiskPolicysAsync(array $args = [])
 * @method \Jdcloud\Result setRiskUsrList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRiskUsrListAsync(array $args = [])
 * @method \Jdcloud\Result listRiskUsrLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRiskUsrListsAsync(array $args = [])
 * @method \Jdcloud\Result delRiskUsrLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delRiskUsrListsAsync(array $args = [])
 * @method \Jdcloud\Result setRiskVar(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRiskVarAsync(array $args = [])
 * @method \Jdcloud\Result listRiskVars(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRiskVarsAsync(array $args = [])
 * @method \Jdcloud\Result delRiskVars(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delRiskVarsAsync(array $args = [])
 * @method \Jdcloud\Result listRiskEventVars(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRiskEventVarsAsync(array $args = [])
 * @method \Jdcloud\Result delRiskEventVars(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delRiskEventVarsAsync(array $args = [])
 * @method \Jdcloud\Result setRiskEventVars(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRiskEventVarsAsync(array $args = [])
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