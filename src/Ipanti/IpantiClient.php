<?php
/**
 * Ipanti
 *
 * @category Jdcloud
 * @package  Jdcloud\Ipanti
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ipanti;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ipanti.
 *
 * @method \Jdcloud\Result describeDDoSAttackLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDDoSAttackLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeCCAttackLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCAttackLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeCCAttackLogDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCAttackLogDetailsAsync(array $args = [])
 * @method \Jdcloud\Result downloadDDoSAttackLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadDDoSAttackLogsAsync(array $args = [])
 * @method \Jdcloud\Result downloadCCAttackLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadCCAttackLogsAsync(array $args = [])
 * @method \Jdcloud\Result downloadCCAttackLogDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadCCAttackLogDetailsAsync(array $args = [])
 * @method \Jdcloud\Result describeAttackStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackStatisticsAsync(array $args = [])
 * @method \Jdcloud\Result describeAttackTypeCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackTypeCountAsync(array $args = [])
 * @method \Jdcloud\Result describeDDoSGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDDoSGraphAsync(array $args = [])
 * @method \Jdcloud\Result describeFwdGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFwdGraphAsync(array $args = [])
 * @method \Jdcloud\Result describeCCGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCGraphAsync(array $args = [])
 * @method \Jdcloud\Result describeForwardRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeForwardRulesAsync(array $args = [])
 * @method \Jdcloud\Result createForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result switchForwardRuleProtect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchForwardRuleProtectAsync(array $args = [])
 * @method \Jdcloud\Result switchForwardRuleOrigin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchForwardRuleOriginAsync(array $args = [])
 * @method \Jdcloud\Result describeProtectionRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyProtectionRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyProtectionRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeGeoAreas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGeoAreasAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result modifyEPB(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEPBAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceCC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceCCAsync(array $args = [])
 * @method \Jdcloud\Result enableInstanceCC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableInstanceCCAsync(array $args = [])
 * @method \Jdcloud\Result disableInstanceCC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableInstanceCCAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceUrlWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceUrlWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result enableInstanceUrlWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableInstanceUrlWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result disableInstanceUrlWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableInstanceUrlWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result enableInstanceIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableInstanceIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result disableInstanceIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableInstanceIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceIpWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceIpWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result enableInstanceIpWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableInstanceIpWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result disableInstanceIpWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableInstanceIpWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result enableCCObserverMode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableCCObserverModeAsync(array $args = [])
 * @method \Jdcloud\Result disableCCObserverMode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableCCObserverModeAsync(array $args = [])
 * @method \Jdcloud\Result enableCCIpLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableCCIpLimitAsync(array $args = [])
 * @method \Jdcloud\Result disableCCIpLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableCCIpLimitAsync(array $args = [])
 * @method \Jdcloud\Result setCCIpLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCCIpLimitAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmConfigAsync(array $args = [])
 * @method \Jdcloud\Result modifyAlarmConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAlarmConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeNameList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNameListAsync(array $args = [])
 * @method \Jdcloud\Result describeProtectionStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionStatisticsAsync(array $args = [])
 * @method \Jdcloud\Result checkName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkNameAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcIpList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcIpListAsync(array $args = [])
 * @method \Jdcloud\Result describeCCDefaultThresholds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCDefaultThresholdsAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRulesAsync(array $args = [])
 * @method \Jdcloud\Result createWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result switchWebRuleProtect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchWebRuleProtectAsync(array $args = [])
 * @method \Jdcloud\Result switchWebRuleOrigin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchWebRuleOriginAsync(array $args = [])
 * @method \Jdcloud\Result enableWebRuleCC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWebRuleCCAsync(array $args = [])
 * @method \Jdcloud\Result disableWebRuleCC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWebRuleCCAsync(array $args = [])
 * @method \Jdcloud\Result modifyCertInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCertInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeCertInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertInfoAsync(array $args = [])
 */
class IpantiClient extends JdCloudClient
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
                        'service' => 'ipanti',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ipanti'
            );
        };

        parent::__construct($args);
    }
}