<?php
/**
 * Es
 *
 * @category Jdcloud
 * @package  Jdcloud\Es
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Es;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with es.
 *
 * @method \Jdcloud\Result describeAuthStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuthStatusAsync(array $args = [])
 * @method \Jdcloud\Result describeRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRolesAsync(array $args = [])
 * @method \Jdcloud\Result describeUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUsersAsync(array $args = [])
 * @method \Jdcloud\Result describeBillingInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBillingInstancesAsync(array $args = [])
 * @method \Jdcloud\Result disableDicts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableDictsAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceSpec(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceSpecAsync(array $args = [])
 * @method \Jdcloud\Result instanceChangeType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceChangeTypeAsync(array $args = [])
 * @method \Jdcloud\Result instanceConfirmDelete(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instanceConfirmDeleteAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceKibanaSpec(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceKibanaSpecAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceExtendInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceExtendInfoAsync(array $args = [])
 */
class EsClient extends JdCloudClient
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
                        'service' => 'es',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'es'
            );
        };

        parent::__construct($args);
    }
}