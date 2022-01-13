<?php
/**
 * Antipro
 *
 * @category Jdcloud
 * @package  Jdcloud\Antipro
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Antipro;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with antipro.
 *
 * @method \Jdcloud\Result describeAttackLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeAttackStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackStatisticsAsync(array $args = [])
 * @method \Jdcloud\Result describeAttackTypeCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackTypeCountAsync(array $args = [])
 * @method \Jdcloud\Result describeAttackSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackSourceAsync(array $args = [])
 * @method \Jdcloud\Result describeIpMonitorFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpMonitorFlowAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result addProtectedIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addProtectedIpAsync(array $args = [])
 * @method \Jdcloud\Result deleteProtectedIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProtectedIpAsync(array $args = [])
 * @method \Jdcloud\Result describeProtectedIpList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectedIpListAsync(array $args = [])
 * @method \Jdcloud\Result describeProtectionRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeGeoAreas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGeoAreasAsync(array $args = [])
 * @method \Jdcloud\Result modifyProtectionRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyProtectionRuleAsync(array $args = [])
 * @method \Jdcloud\Result checkInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result describeProtectionOutline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionOutlineAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceAclCnt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAclCntAsync(array $args = [])
 * @method \Jdcloud\Result enableInstanceAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableInstanceAclAsync(array $args = [])
 * @method \Jdcloud\Result disableInstanceAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableInstanceAclAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceAclEnable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAclEnableAsync(array $args = [])
 * @method \Jdcloud\Result describeAcls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAclsAsync(array $args = [])
 * @method \Jdcloud\Result createAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAclAsync(array $args = [])
 * @method \Jdcloud\Result modifyAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAclAsync(array $args = [])
 * @method \Jdcloud\Result deleteAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAclAsync(array $args = [])
 * @method \Jdcloud\Result modifyAclPriority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAclPriorityAsync(array $args = [])
 * @method \Jdcloud\Result enableAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAclAsync(array $args = [])
 * @method \Jdcloud\Result disableAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAclAsync(array $args = [])
 * @method \Jdcloud\Result describeIpSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpSetsAsync(array $args = [])
 * @method \Jdcloud\Result createIpSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIpSetAsync(array $args = [])
 * @method \Jdcloud\Result describeIpSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpSetAsync(array $args = [])
 * @method \Jdcloud\Result modifyIpSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyIpSetAsync(array $args = [])
 * @method \Jdcloud\Result deleteIpSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIpSetAsync(array $args = [])
 * @method \Jdcloud\Result describePortSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePortSetsAsync(array $args = [])
 * @method \Jdcloud\Result createPortSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortSetAsync(array $args = [])
 * @method \Jdcloud\Result describePortSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePortSetAsync(array $args = [])
 * @method \Jdcloud\Result modifyPortSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyPortSetAsync(array $args = [])
 * @method \Jdcloud\Result deletePortSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortSetAsync(array $args = [])
 * @method \Jdcloud\Result describeElasticIpResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeCpsIpResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCpsIpResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeCcsIpResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCcsIpResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeWafIpResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWafIpResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeOperationRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOperationRecordsAsync(array $args = [])
 */
class AntiproClient extends JdCloudClient
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
                        'service' => 'antipro',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'antipro'
            );
        };

        parent::__construct($args);
    }
}