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
 * @method \Jdcloud\Result assignSecondaryIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignSecondaryIpsAsync(array $args = [])
 * @method \Jdcloud\Result unassignSecondaryIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unassignSecondaryIpsAsync(array $args = [])
 * @method \Jdcloud\Result deleteRdsDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRdsDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result deleteVmInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVmInstanceAsync(array $args = [])
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