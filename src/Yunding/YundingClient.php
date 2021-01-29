<?php
/**
 * Yunding
 *
 * @category Jdcloud
 * @package  Jdcloud\Yunding
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Yunding;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with yunding.
 *
 * @method \Jdcloud\Result describeTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTasksAsync(array $args = [])
 * @method \Jdcloud\Result put(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAsync(array $args = [])
 * @method \Jdcloud\Result putProductMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putProductMetricDataAsync(array $args = [])
 * @method \Jdcloud\Result assignSecondaryIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignSecondaryIpsAsync(array $args = [])
 * @method \Jdcloud\Result unassignSecondaryIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unassignSecondaryIpsAsync(array $args = [])
 * @method \Jdcloud\Result describeNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkInterfaceAsync(array $args = [])
 * @method \Jdcloud\Result describeRdsInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRdsInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeRdsInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRdsInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeRdsWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRdsWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result modifyRdsWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRdsWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result describeRdsAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRdsAccountsAsync(array $args = [])
 * @method \Jdcloud\Result createRdsAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRdsAccountAsync(array $args = [])
 * @method \Jdcloud\Result deleteRdsAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRdsAccountAsync(array $args = [])
 * @method \Jdcloud\Result grantRdsPrivilege(array $args = [])
 * @method \GuzzleHttp\Promise\Promise grantRdsPrivilegeAsync(array $args = [])
 * @method \Jdcloud\Result revokePrivilege(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokePrivilegeAsync(array $args = [])
 * @method \Jdcloud\Result describeRdsDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRdsDatabasesAsync(array $args = [])
 * @method \Jdcloud\Result createRdsDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRdsDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result deleteRdsDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRdsDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result describeYdRdsInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeYdRdsInstancesAsync(array $args = [])
 */
class YundingClient extends JdCloudClient
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
                        'service' => 'yunding',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'yunding'
            );
        };

        parent::__construct($args);
    }
}