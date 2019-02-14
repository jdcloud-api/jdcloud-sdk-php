<?php
/**
 * Cps
 *
 * @category Jdcloud
 * @package  Jdcloud\Cps
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cps;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cps.
 *
 * @method \Jdcloud\Result describeOS(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOSAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceTypesAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceRaids(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceRaidsAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceRaid(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceRaidAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceStatusAsync(array $args = [])
 * @method \Jdcloud\Result restartInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restartInstanceAsync(array $args = [])
 * @method \Jdcloud\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Jdcloud\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Jdcloud\Result reinstallInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reinstallInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Jdcloud\Result describeRegiones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegionesAsync(array $args = [])
 * @method \Jdcloud\Result describeSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetAsync(array $args = [])
 */
class CpsClient extends JdCloudClient
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
                        'service' => 'cps',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cps'
            );
        };

        parent::__construct($args);
    }
}