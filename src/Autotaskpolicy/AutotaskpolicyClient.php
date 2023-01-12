<?php
/**
 * Autotaskpolicy
 *
 * @category Jdcloud
 * @package  Jdcloud\Autotaskpolicy
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Autotaskpolicy;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with autotaskpolicy.
 *
 * @method \Jdcloud\Result createPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \Jdcloud\Result modifyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyPolicyAsync(array $args = [])
 * @method \Jdcloud\Result describePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePolicyAsync(array $args = [])
 * @method \Jdcloud\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \Jdcloud\Result describePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePoliciesAsync(array $args = [])
 * @method \Jdcloud\Result copyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyPolicyAsync(array $args = [])
 * @method \Jdcloud\Result enablePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enablePolicyAsync(array $args = [])
 * @method \Jdcloud\Result disablePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disablePolicyAsync(array $args = [])
 * @method \Jdcloud\Result associateExecResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateExecResourceAsync(array $args = [])
 * @method \Jdcloud\Result disassociateExecResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateExecResourceAsync(array $args = [])
 */
class AutotaskpolicyClient extends JdCloudClient
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
                        'service' => 'autotaskpolicy',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'autotaskpolicy'
            );
        };

        parent::__construct($args);
    }
}