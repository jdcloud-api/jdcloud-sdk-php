<?php
/**
 * Clickhouse
 *
 * @category Jdcloud
 * @package  Jdcloud\Clickhouse
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Clickhouse;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with clickhouse.
 *
 * @method \Jdcloud\Result describeAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountsAsync(array $args = [])
 * @method \Jdcloud\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \Jdcloud\Result deleteAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAsync(array $args = [])
 * @method \Jdcloud\Result modifyPrivilege(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyPrivilegeAsync(array $args = [])
 * @method \Jdcloud\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \Jdcloud\Result azs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise azsAsync(array $args = [])
 * @method \Jdcloud\Result orderableInstanceType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise orderableInstanceTypeAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceSpec(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceSpecAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAttributesAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeNodeClasses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeClassesAsync(array $args = [])
 * @method \Jdcloud\Result describeDefaultConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDefaultConfigAsync(array $args = [])
 * @method \Jdcloud\Result describePodMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePodMapAsync(array $args = [])
 * @method \Jdcloud\Result describeDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainNamesAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result modifyReplicaNum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicaNumAsync(array $args = [])
 * @method \Jdcloud\Result upgradeEngineVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise upgradeEngineVersionAsync(array $args = [])
 * @method \Jdcloud\Result disableInternetAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableInternetAccessAsync(array $args = [])
 * @method \Jdcloud\Result enableInternetAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableInternetAccessAsync(array $args = [])
 * @method \Jdcloud\Result describeNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodesAsync(array $args = [])
 * @method \Jdcloud\Result describeProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProgressAsync(array $args = [])
 * @method \Jdcloud\Result selectDetailList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise selectDetailListAsync(array $args = [])
 * @method \Jdcloud\Result internalDescribeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise internalDescribeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeAuditResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuditResultAsync(array $args = [])
 * @method \Jdcloud\Result describeSlowlogResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSlowlogResultAsync(array $args = [])
 * @method \Jdcloud\Result describeParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \Jdcloud\Result modifyParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyParametersAsync(array $args = [])
 * @method \Jdcloud\Result describeWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result modifyWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result deleteWhiteListGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWhiteListGroupAsync(array $args = [])
 * @method \Jdcloud\Result addWhiteListGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addWhiteListGroupAsync(array $args = [])
 */
class ClickhouseClient extends JdCloudClient
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
                        'service' => 'clickhouse',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'clickhouse'
            );
        };

        parent::__construct($args);
    }
}