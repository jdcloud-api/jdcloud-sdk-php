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
 * @method \Jdcloud\Result describeElasticIpResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticIpResourcesAsync(array $args = [])
 * @method \Jdcloud\Result describeCpsIpResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCpsIpResourcesAsync(array $args = [])
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