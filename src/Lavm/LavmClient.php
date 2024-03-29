<?php
/**
 * Lavm
 *
 * @category Jdcloud
 * @package  Jdcloud\Lavm
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Lavm;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with lavm.
 *
 * @method \Jdcloud\Result describeDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDisksAsync(array $args = [])
 * @method \Jdcloud\Result describeFirewallRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFirewallRulesAsync(array $args = [])
 * @method \Jdcloud\Result createFirewallRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFirewallRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyFirewallRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyFirewallRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteFirewallRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFirewallRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Jdcloud\Result createCustomImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomImageAsync(array $args = [])
 * @method \Jdcloud\Result deleteCustomImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomImageAsync(array $args = [])
 * @method \Jdcloud\Result modifyImageAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyImageAttributeAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Jdcloud\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Jdcloud\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Jdcloud\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceVncUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceVncUrlAsync(array $args = [])
 * @method \Jdcloud\Result resetSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetSystemAsync(array $args = [])
 * @method \Jdcloud\Result updateInstanceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInstanceAttributeAsync(array $args = [])
 * @method \Jdcloud\Result describePlansCanUpgrade(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlansCanUpgradeAsync(array $args = [])
 * @method \Jdcloud\Result upgradeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise upgradeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstancesTrafficPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesTrafficPackagesAsync(array $args = [])
 * @method \Jdcloud\Result associateDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDomainsAsync(array $args = [])
 * @method \Jdcloud\Result disassociateDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDomainsAsync(array $args = [])
 * @method \Jdcloud\Result describeDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainsAsync(array $args = [])
 * @method \Jdcloud\Result describeKeypairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeypairsAsync(array $args = [])
 * @method \Jdcloud\Result createKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeypairAsync(array $args = [])
 * @method \Jdcloud\Result importKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeypairAsync(array $args = [])
 * @method \Jdcloud\Result deleteKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeypairAsync(array $args = [])
 * @method \Jdcloud\Result attachKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachKeypairAsync(array $args = [])
 * @method \Jdcloud\Result detachKeypair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachKeypairAsync(array $args = [])
 * @method \Jdcloud\Result describePlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlansAsync(array $args = [])
 * @method \Jdcloud\Result describePlansSoldOutStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlansSoldOutStatusAsync(array $args = [])
 * @method \Jdcloud\Result queryQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryQuotaAsync(array $args = [])
 */
class LavmClient extends JdCloudClient
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
                        'service' => 'lavm',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'lavm'
            );
        };

        parent::__construct($args);
    }
}