<?php
/**
 * Cmp
 *
 * @category Jdcloud
 * @package  Jdcloud\Cmp
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cmp;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cmp.
 *
 * @method \Jdcloud\Result describeMaintenancePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenancePoliciesAsync(array $args = [])
 * @method \Jdcloud\Result createMaintenancePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMaintenancePolicyAsync(array $args = [])
 * @method \Jdcloud\Result modifyMaintenancePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMaintenancePolicyAsync(array $args = [])
 * @method \Jdcloud\Result deleteMaintenancePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMaintenancePolicyAsync(array $args = [])
 * @method \Jdcloud\Result associateMaintenancePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMaintenancePolicyAsync(array $args = [])
 * @method \Jdcloud\Result disassociateMaintenancePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMaintenancePolicyAsync(array $args = [])
 * @method \Jdcloud\Result describeMaintenanceEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceEventsAsync(array $args = [])
 * @method \Jdcloud\Result createCustomEventsOnResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomEventsOnResourceAsync(array $args = [])
 * @method \Jdcloud\Result modifyMaintenanceEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMaintenanceEventAsync(array $args = [])
 * @method \Jdcloud\Result authorizeEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeEventAsync(array $args = [])
 * @method \Jdcloud\Result recommendedInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recommendedInstanceTypesAsync(array $args = [])
 */
class CmpClient extends JdCloudClient
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
                        'service' => 'cmp',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cmp'
            );
        };

        parent::__construct($args);
    }
}