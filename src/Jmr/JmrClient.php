<?php
/**
 * Jmr
 *
 * @category Jdcloud
 * @package  Jdcloud\Jmr
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Jmr;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with jmr.
 *
 * @method \Jdcloud\Result createClusterInNewNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterInNewNetworkAsync(array $args = [])
 * @method \Jdcloud\Result showClusterDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise showClusterDetailsAsync(array $args = [])
 * @method \Jdcloud\Result releaseCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseClusterAsync(array $args = [])
 */
class JmrClient extends JdCloudClient
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
                        'service' => 'jmr',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'jmr'
            );
        };

        parent::__construct($args);
    }
}