<?php
/**
 * Ag
 *
 * @category Jdcloud
 * @package  Jdcloud\Ag
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ag;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ag.
 *
 * @method \Jdcloud\Result describeScalingActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \Jdcloud\Result describeAsAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAsAlarmsAsync(array $args = [])
 * @method \Jdcloud\Result createAsAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAsAlarmAsync(array $args = [])
 * @method \Jdcloud\Result updateAsAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAsAlarmAsync(array $args = [])
 * @method \Jdcloud\Result deleteAsAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAsAlarmAsync(array $args = [])
 * @method \Jdcloud\Result disableAsAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAsAlarmAsync(array $args = [])
 * @method \Jdcloud\Result enableAsAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAsAlarmAsync(array $args = [])
 * @method \Jdcloud\Result describeAsCrons(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAsCronsAsync(array $args = [])
 * @method \Jdcloud\Result createAsCron(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAsCronAsync(array $args = [])
 * @method \Jdcloud\Result updateAsCron(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAsCronAsync(array $args = [])
 * @method \Jdcloud\Result deleteAsCron(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAsCronAsync(array $args = [])
 * @method \Jdcloud\Result disableAsCron(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAsCronAsync(array $args = [])
 * @method \Jdcloud\Result enableAsCron(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAsCronAsync(array $args = [])
 * @method \Jdcloud\Result enableAutoScaling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAutoScalingAsync(array $args = [])
 * @method \Jdcloud\Result disableAutoScaling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAutoScalingAsync(array $args = [])
 * @method \Jdcloud\Result updateAutoScaling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAutoScalingAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstancesManaged(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstancesManagedAsync(array $args = [])
 * @method \Jdcloud\Result describeAsRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAsRulesAsync(array $args = [])
 * @method \Jdcloud\Result createAsRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAsRuleAsync(array $args = [])
 * @method \Jdcloud\Result updateAsRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAsRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteAsRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAsRuleAsync(array $args = [])
 * @method \Jdcloud\Result executeAsRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeAsRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeAgs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgsAsync(array $args = [])
 * @method \Jdcloud\Result createAg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAgAsync(array $args = [])
 * @method \Jdcloud\Result describeAg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgAsync(array $args = [])
 * @method \Jdcloud\Result updateAg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAgAsync(array $args = [])
 * @method \Jdcloud\Result deleteAg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAgAsync(array $args = [])
 * @method \Jdcloud\Result abandonInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise abandonInstancesAsync(array $args = [])
 * @method \Jdcloud\Result setInstanceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceTemplateAsync(array $args = [])
 * @method \Jdcloud\Result describeQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuotasAsync(array $args = [])
 */
class AgClient extends JdCloudClient
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
                        'service' => 'ag',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ag'
            );
        };

        parent::__construct($args);
    }
}